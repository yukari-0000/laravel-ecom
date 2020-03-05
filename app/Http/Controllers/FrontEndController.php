<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontEndController extends Controller
{
    public function index(){

        $products = Product::orderBy('id','DESC')->paginate(3);
        return view('index')->with('products',$products);
    }

    public function single_product(Product $product){

        return view('single')->with('product',$product);
    }
}
