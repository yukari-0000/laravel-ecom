<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class ShoppingController extends Controller
{
    public function cart(){

        return view('cart');
    }

    public function add_to_cart(){

        $product = Product::find(request()->prod_id);

        $cartItem = Cart::add(
            ['id' => $product->id,
            'name' => $product->title,
            'qty' => request()->qty,
            'price' => $product->price,
            'weight' => 550,
            ]);

        // Next we associate a model with the item.
        Cart::associate($cartItem->rowId, 'App\Product');

        return redirect()->route('cart');
    }

    public function rapid_add($id){
        $product = Product::find($id);

        $cartItem = Cart::add(
            ['id' => $product->id,
            'name' => $product->title,
            'qty' => 1,
            'price' => $product->price,
            'weight' => 550,
            ]);

        // Next we associate a model with the item.
        Cart::associate($cartItem->rowId, 'App\Product');

        return redirect()->route('cart');

    }

    public function incr($id,$qty){

        Cart::update($id, $qty + 1); // Will update the quantity

        return redirect()->back();

    }

    public function decr($id,$qty){

        Cart::update($id, $qty - 1); // Will update the quantity

        return redirect()->back();

    }

    public function cart_delete($id){

        Cart::remove($id);

        return redirect()->back();

    }
}
