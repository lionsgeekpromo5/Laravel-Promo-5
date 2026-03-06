<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('Product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'size' => 'required|in:s,m,l',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,webp'
        ]);

        //* store path f database and store the image f storage/app/public
        //file() a method li katakhod l content dyaml l'image
        $path = $request->file('image')->store('products', 'public');

        
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'size' => $request->size,
            'description' => $request->description,
            'image' => $path
        ]);
        return redirect('products');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('Product.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('Product.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'size' => 'required|in:s,m,l',
            'description' => 'required'
        ]);

        $product->update($request->all());
        return redirect('products');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }
}
