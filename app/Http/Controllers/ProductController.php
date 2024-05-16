<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('Products.index', compact('product'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::all();
        return view('Products.create', compact('brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->Product = $request->product;
        $product->Price = $request->price;
        $product->Description = $request->description;
        $product->id_brand = $request->id_brand;
        $product->save();
        return redirect()->route('product.index')
            ->with('success', 'data berhasil di tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::FindOrFail($id);
        return view('Products.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::FindOrFail($id);
        $brand = Brand::all();

        return view('Products.edit', compact('product','brand'));
            

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::FindOrFail($id);
        $product->Product = $request->name_product;
        $product->Price = $request->price;
        $product->Description = $request->description;
        $product->id_brand = $request->id_brand;
        $product->save();
        return redirect()->route('product.index')
            ->with('success', 'data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::FindOrFail($id);
        $product->delete();
        return redirect()->route('product.index')
            ->with('success', 'data berhasil di dihapus');

    }
}
