<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
            $imagePath = $request->file('image')->store('images', 'public');
            $product->image = basename($imagePath);
        }

        $product->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = $image->store('images', 'public');
                $product->photos()->create([
                    'product_id' => $product->id,
                    'url' => basename($filename),
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
        $product = Product::findOrFail($id);

        // Handle the main product image
        if ($product->image) {
            $imageFilename = $product->image;

            $usedElsewhere = Product::where('id', '!=', $product->id)
                ->where('image', $imageFilename)
                ->whereNull('deleted_at') // Only consider active products
                ->exists();

            if (!$usedElsewhere && Storage::disk('public')->exists('images/' . $imageFilename)) {
                Storage::disk('public')->move(
                    'images/' . $imageFilename,
                    'images/trash/' . $imageFilename
                );
            }
        }

        // Handle additional photos associated with the product
        foreach ($product->photos as $photo) {
            $photoFilename = $photo->url;

            $usedElsewhere = \DB::table('photos')
                ->where('product_id', '!=', $product->id)
                ->where('url', $photoFilename)
                ->whereNull('deleted_at')
                ->exists();

            if (!$usedElsewhere && Storage::disk('public')->exists('images/' . $photoFilename)) {
                Storage::disk('public')->move(
                    'images/' . $photoFilename,
                    'images/trash/' . $photoFilename
                );
            }

            // Soft delete the photo
            $photo->deleted_at = now();
            $photo->save();
        }

        // Soft delete the product
        $product->deleted_at = now();
        $product->save();

        return redirect()->route('product.delete')
            ->with('success', 'Produkt bol úspešne odstránený.');
    }



    public function editProduct(Request $request)
    {
        $categories = Category::with('subcategories')->get();
        $product = null;

        if ($request->filled('s') && $request->filled('subcategory')) {
            $search = str_replace(' ', '%', $request->input('s'));
            $product = Product::where('name', 'ILIKE', '%' . $search . '%')
                ->where('subcategory_id', $request->subcategory)
                ->first();
        }

        return view('components.edit', compact('categories', 'product'));
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'discount' => $request->discount,
            'brand' => $request->brand,
            'stock' => $request->stock,
            'subcategory_id' => $request->subcategory_id,
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images', 'public');
            $product->image = basename($image);
            $product->save();
        }

        return redirect()->route('product.edit', ['s' => $product->name, 'subcategory' => $product->subcategory_id])
            ->with('success', 'Produkt bol úspešne upravený.');
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
}
