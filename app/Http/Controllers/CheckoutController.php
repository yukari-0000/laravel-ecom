<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Cart;
use App\mail\PurchaseSuccessful;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function index(){
        
        return view('checkout');
    }

    public function payment(){

        //set the stripe secret api key
        Stripe::setApiKey("sk_test_UKZRjj8Ee3j7TKk9NNTS965o00b2yHuKLs");
        
        //get the token and make the charge
        $token = request()->stripeToken;

        $charge = Charge::create([
            'amount' => Cart::total() * 100,
            'currency' => 'inr',
            'description' => 'Laravel Stripe Payment',
            'source' => $token
        ]);

        Cart::destroy();

        Mail::to(request()->stripeEmail)->send(new PurchaseSuccessful);
        return redirect('/');

    }
}
