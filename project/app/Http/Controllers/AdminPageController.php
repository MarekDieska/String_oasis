<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPageController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'subcategory' => 'required|exists:subcategories,id',
            'name' => 'required|string|max:100',
            'brand' => 'required|string',
            'price' => 'required|numeric|min:1|max:5000',
            'discount' => 'required|numeric|min:0|max:100',
            'stock' => 'required|numeric|min:0',
            'rating' => 'required|numeric|min:1|max:5',
            'description' => 'required|string|min:50|max:500',
            'image' => 'required|image',
            'images' => 'required|array|min:2',
            'images.*' => 'image',
        ]);

        $product = new Product();
        $product->subcategory_id = $validated['subcategory'];
        $product->name = $validated['name'];
        $product->brand = $validated['brand'];
        $product->price = $validated['price'];
        $product->discount = $validated['discount'];
        $product->stock = $validated['stock'];
        $product->stars = $validated['rating'];
        $product->description = $validated['description'];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->storeAs('images', $request->file('image')->getClientOriginalName(), 'public');
            $product->image = $request->file('image')->getClientOriginalName();
        }

        $product->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = $image->storeAs('images', $image->getClientOriginalName(), 'public');
                $product->photos()->create([
                    'url' => $image->getClientOriginalName(),
                ]);
            }
        }

        return redirect()->route('admin_add')->with('success', 'Produkt bol úspešne pridaný.');
    }

    public function deleteProduct(Request $request)
    {
        $categories = Category::with('subcategories')->get();
        $product = null;

        if ($request->filled('s') && $request->filled('subcategory')) {
            $search = str_replace(' ', '%', $request->input('s'));
            $product = Product::where('name', 'ILIKE', '%' . $search . '%')
                ->where('subcategory_id', $request->subcategory)
                ->first();
        }

        return view('components.delete', compact('categories', 'product'));
    }

    public function destroyProduct($id)
    {
        $product = Product::with('photos')->findOrFail($id);

        if ($product->image) {
            $usedElsewhere = Product::where('id', '!=', $product->id)
                ->where('image', $product->image)
                ->whereNull('deleted_at')
                ->exists();

            if (!$usedElsewhere && Storage::disk('public')->exists('images/' . $product->image)) {
                Storage::disk('public')->move('images/' . $product->image, 'images/trash/' . $product->image);
            }
        }

        foreach ($product->photos as $photo) {
            $usedElsewhere = \DB::table('photos')
                ->where('product_id', '!=', $product->id)
                ->where('url', $photo->url)
                ->whereNull('deleted_at')
                ->exists();

            if (!$usedElsewhere && Storage::disk('public')->exists('images/' . $photo->url)) {
                Storage::disk('public')->move('images/' . $photo->url, 'images/trash/' . $photo->url);
            }

            $photo->delete();
        }

        $product->delete();

        return redirect()->route('product.delete')
            ->with('success', 'Produkt bol úspešne odstránený.');
    }

    public function editProduct(Request $request)
    {
        $categories = Category::with('subcategories')->get();
        $product = null;

        if ($request->filled('s') && $request->filled('subcategory')) {
            $search = str_replace(' ', '%', $request->input('s'));
            $product = Product::with(['photos', 'subcategory.category'])
                ->where('name', 'ILIKE', '%' . $search . '%')
                ->where('subcategory_id', $request->subcategory)
                ->first();
        }

        return view('components.edit', compact('categories', 'product'));
    }

    public function updateProduct(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|string|min:50|max:500',
            'price' => 'required|numeric|min:0.01|max:5000',
            'discount' => 'required|numeric|min:0|max:100',
            'brand' => 'required|string|max:100',
            'stock' => 'required|integer|min:0',
            'stars' => 'required|numeric|min:1|max:5',
            'subcategory_id' => 'required|exists:subcategories,id',
            'image' => 'nullable|image|max:2048',
            'images.*' => 'nullable|image|max:2048',
            'deleted_images' => 'nullable|string',
        ]);

        $product = Product::with('photos')->findOrFail($id);
        $oldImage = $product->image;

        $product->update($validated);

        if (!Storage::disk('public')->exists('images/trash')) {
            Storage::disk('public')->makeDirectory('images/trash');
        }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->storeAs('images', $request->file('image')->getClientOriginalName(), 'public');
            $product->image = $request->file('image')->getClientOriginalName();
            $product->save();

            if ($oldImage) {
                $this->checkForSfD('images/'.$oldImage, 'products', 'image', $product->id);
            }
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = $image->storeAs('images', $image->getClientOriginalName(), 'public');
                $product->photos()->create(['url' => $image->getClientOriginalName()]);
            }
        }

        if ($request->filled('deleted_images')) {
            $deletedIds = json_decode($request->deleted_images, true);

            $product->photos()
                ->whereIn('id', $deletedIds)
                ->each(function($photo) {
                    $this->checkForSfD('images/'.$photo->url, 'photos', 'url', $photo->id);
                    $photo->delete();
                });
        }

        return redirect()->route('product.edit', [
            's' => $product->name,
            'subcategory' => $product->subcategory_id
        ])->with('success', 'Produkt bol úspešne upravený.');
    }

    protected function checkForSfD(string $filePath, string $table, string $column, int $excludeId): bool
    {
        if (!Storage::disk('public')->exists($filePath)) {
            return false;
        }

        $filenameToCheck = last(explode('/', $filePath));

        $usedElsewhere = \DB::table($table)
            ->where($column, $filenameToCheck)
            ->where('id', '!=', $excludeId)
            ->whereNull('deleted_at')
            ->exists();

        if (!$usedElsewhere) {
            $filename = pathinfo($filePath, PATHINFO_BASENAME);
            Storage::disk('public')->move($filePath, 'images/trash/' . $filename);
            return true;
        }

        return false;
    }

    public function show(Request $request)
    {
        $category = $request->get('cat');

        $categories = Category::all();
        $subcategories = [];

        if ($category) {
            $subcategories = Subcategory::where('category_id', $category)->get();
        }

        return view('components.add', compact('categories', 'subcategories'));
    }

    public function deletePhoto($id)
    {
        $photo = Photo::findOrFail($id);

        if (Storage::disk('public')->exists('images/' . $photo->url)) {
            Storage::disk('public')->move('images/' . $photo->url, 'images/trash/' . $photo->url);
        }

        $photo->delete();

        return response()->json(['success' => true]);
    }
}
