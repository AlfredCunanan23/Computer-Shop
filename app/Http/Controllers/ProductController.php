<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($part)
    {
       if($part == 'ALL'){
            $products = Product::all();
            return response()->json($products);
       }else{
            $products = Product::where('part', $part)->get();

            return response()->json($products);
       }

        
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $product = Product::create($request->post());
        return response()->json([
            'message' => 'Product Added Successfully!!!',
            'product' => $product
        ]);
    }
    public function show($id)
    {
        $product = Product::find($id);
        
        return $product;
    }
    public function edit($id, Request $request)
    {
        $product = Product::find($id);
        $product->update([
            'part' => $request ->part,
            'name' => $request -> name,
            'description' => $request->description,
            'price' => $request -> price,
        ]);
        $product->save();
        return response()->json('Product Data updated!');
    }

    public function update($id, Request $request, Product $product)
    {
        $product = Product::find($id);
        $product->update($request->all());

        return response()->json('Product updated!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([
            'message' => 'Product Deleted Successfully!!!'
        ]);
    }
}
