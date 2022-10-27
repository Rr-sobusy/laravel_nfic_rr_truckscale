<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return Product::orderBy('product_name','asc')->get();
    }

    public function post(Request $req)
    {
        $product = new Product();
        $product->product_name = $req->productName;
        $product->save();
    }
}
