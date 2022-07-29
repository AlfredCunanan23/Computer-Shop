<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartController extends Controller
{
    public function showCpu()
    {
        $products = DB::table('products')
        ->where('part', '', '%CPU')->get();    
        return response()->json($products);
    }
    
    
}
