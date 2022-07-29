<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::all([
            'id',
            'customer_id',
            'total'
        ]);
        return response()->json($orders);
    }
    public function show($id)
    {
        $orders = Order::find($id);
        return $orders;
    }

    public function create()
    {
        //
    }
    public function make(Request $request)
    {
        $order = Order::create([
            'customer_id' =>$request->customer_id,
            'product_id' =>$request->product_id,
            'total' =>$request->total
        ]);
        $product = Product::find($request->product_id);
        $get_order_id = Order::orderBy('id', 'desc')->first()->id;
        $product->orders()->attach($get_order_id);
        return $order;
    }
    public function store(Request $request)
    {
        $order = Order::create($request->post());
        return response()->json([
            'message' => 'Order Added Successfully!!!',
            'order' => $order
        ]);
    }
    public function destroy($order_id)
    {
        $order = Order::find($order_id);
        $order->delete();
        return response()->json([
            'message' => 'Order Deleted Successfully!!!'
        ]);
    }
}
