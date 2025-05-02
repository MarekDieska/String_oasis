<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

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
