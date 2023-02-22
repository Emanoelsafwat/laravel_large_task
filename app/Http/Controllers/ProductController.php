<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductReuest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('pages.ProductList', compact('products'));

    }



    public function create()
    {
        return view('pages.ProductForm');

    }


    public function store(ProductReuest $request)
    {

        $path = $request->file('image')->store('photos' , 'public');


        Product::create([

            'name' => $request['name'],
            'image' => $path

        ]);

        return redirect()->route('products.index')->with('success' , 'Product added successfully !');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
