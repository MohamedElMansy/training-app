<?php

namespace App\Http\Controllers\api;

use App\Data\ProductData;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products=Product::all();
        return response()->json($products);
    }

    public function show($id)
    {
        $product=Product::find($id)->getData();
        return response()->json($product);
    }
}
