<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
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
        $products = Product::all();
        return view("product.index",["products"=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::all();
        return view('product.create',["categories"=>$categories]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'category_id' => 'required',
            'description'=>'required',
            'imagename' => 'required',
            'imagename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasfile('imagename'))
        {
            foreach($request->file('imagename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
        }

        $product = new Product([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'category_id' => $request->get('category_id'),
            'imagename' => json_encode($data)
        ]);

//        $product->imagename = json_encode($data);

        $product->save();

        if($product){
            return redirect ('/products')->with('success','El producto ha sido agregado');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product_id)
    {
        $product = Product::find($product_id);
        return view('product.show',[ 'product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product_id)
    {
        $categories = ProductCategory::all();
        $product = Product::find($product_id);
        return view('product.edit', [ 'product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id)
    {
        $request->validate([
            'name'=>'required',
            'category_id' => 'required',
            'description'=>'required'
        ]);

/*
        if($request->hasfile('imagename'))
        {
            foreach($request->file('imagename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);  
                $data[] = $name;  
            }
        }
        */


        $product = Product::find($product_id);
        $product->name = $request->name;
        $product->description = $request->description;

        //$product->filename=json_encode($data);

        if($product->save()){
            return redirect("/products");
        }else{
            return view("/home");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        $product = Product::find($product_id);
        Product::destroy($product->id);
        return redirect ('/products')->with('success','El producto ha sido eliminada');
    }
}
