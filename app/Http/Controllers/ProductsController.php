<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('rank')->get();


        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Save the file if exist
        $filename = '';
        if( $request->hasFile('image') ) {
            $file = $request->file('image');
            $filename = 'product_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/products/', $filename);
        }

        $product = new Product;
        $product->title     = $request->title;
        $product->body      = $request->body;
        $product->image     = $filename;
        $product->price     = $request->price;
        $product->rank      = $request->rank;
        $product->active    = (int)$request->active; 
        $product->save();

        return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->title     = $request->title;
        $product->body      = $request->body;
        if( $request->hasFile('image') ) {
            $file = $request->file('image');
            $filename = 'product_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/products/', $filename);
            $product->image = $filename;
        }

        $product->price  = $request->price;
        $product->rank   = $request->rank;
        $product->active   = (int) $request->active;
        $product->save();

        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $id = $product->delete();

        return redirect('products');
    }
}
