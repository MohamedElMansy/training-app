<?php

namespace App\Http\Controllers\Api;

use App\Data\ProductData;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products=ProductData::collection(Product::all())->wrap('data');
        return $products;
    }

    public function show($id)
    {
//        $product=Product::find($id)->getData();
        $product=ProductData::fromModel(Product::find($id))->include('category')->wrap('data');
        return $product;
    }
    public function update($id,
        Request $request
    ){
        $obj=ProductData::fromRequest($request);
        $product_updated=Product::where('id',$id)->update($obj->all());
        if($product_updated)
            return response()->json(["message"=>"Product updated successfully"]);
    }
}
