<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPageController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
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
            'images' => 'required|array',
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
            $filename = $request->image->extension();
            $request->image->move(public_path('images'), $filename);
            $product->image = $filename;
        }
        $product->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = $image->extension();
                $image->move(public_path('images'), $filename);

                $product->photos()->create([
                    'product_id' => $product->id,
                    'url' => $filename,
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

        // Optionally delete the image from storage
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('product.delete')->with('success', 'Produkt bol úspešne odstránený.');
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




    /**
     * Display the specified resource.
     */
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
