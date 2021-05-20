<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $product = Product::with('category')->get();
        return view('products.index',compact('product'));
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
        $request->validate([
            'name' =>'required |min:3 | max:100 ',
            'color' =>'required|min:3 | max:100 ',
            'price' =>'required | gt:0',
            
     
        ]);
        $product =  new Product ;
        $product->name = $request->name;
        $product->slug = Str::slug($request->input('name').Str::random(40), '-');
        $product->color = $request->color;
        $product->price = $request->price;
        $product->category_id = $request->category;
        $product->save();
 
        return redirect()->route('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show' , ['product' => $product]) ;
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('products.edit' , ['product' => $product]);
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
        
        $product = Product::where('id',$id)->first();

      
         $product->name = $request->name;
         $product->color = $request->color;
         $product->price = $request->price;
         $product->category_id = $request->category;
        
        $product->update();
        return view('products.show' , ['product' => $product]) ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('products');
    }
}
