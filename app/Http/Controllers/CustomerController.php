<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all([
        'id',
        'first_name',
        'last_name',
        'address',
        'contact_number',
        'email'
    ]);
        return response()->json($customers);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $customer = Customer::create($request->post());
        return response()->json([
            'message' => 'Customer Created Successfully!!!',
            'customer' => $customer
        ]);
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        
        return $customer;
    }

    public function edit($id, Request $request){
        $customer = Customer::find($id);
        $customer->update([
            'first_name' => $request -> first_name,
            'last_name' => $request -> last_name,
            'address' => $request->address,
            'contact_number' => $request->contact_number,
            'email' => $request -> email,
        ]);
        $customer->save();
        return response()->json('Customer Data updated!');
    }

    public function update($id, Request $request, Customer $customer)
    {
        $customer = Customer::find($id);
        $customer->update($request->all());

        return response()->json('Customer updated!');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return response()->json([
            'message' => 'Customer Deleted Successfully!!!'
        ]);
    }
}
