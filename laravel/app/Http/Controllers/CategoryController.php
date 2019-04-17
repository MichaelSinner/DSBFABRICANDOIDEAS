<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /* Constructor  
    */
    public function __construct()
    {
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ProductCategory::all();
        return view("category.index",["categories"=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');        
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
            'name'=>'required'
        ]);
        $categories = new ProductCategory([
            'name' => $request->get('name'),
        ]);

        $categories->save();

        if($categories){
            return redirect ('/categories')->with('success','La categoria ha sido creada');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        $categories = ProductCategory::find($id);
        return view('category.show',[ 'categories' => $categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        $categories = ProductCategory::find($productCategory->id);
        return view("dashboard.campaign.edit", ['categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        $id = $request->id;
        $categories = ProductCategory::find($id);
        $categories->name = $request->name;
        if($categories->save()){
            return redirect("/categories");
        }else{
            return view("/home");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory)
    {

        $categories = ProductCategory::all()->where('id',$productCategory->id);
        $count = count($publications);
        ProductCategory::destroy($publication->id);
        return redirect ('/categories')->with('success','La categoria ha sido eliminada');
    }
}
