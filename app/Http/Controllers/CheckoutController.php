<?php

namespace App\Http\Controllers;

use App\Mail\PurchaseSuccessful;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    //
    public function index(){
        if (Cart::count() == 0){
            Session::flash('info', 'Your cart is empty, you need to do some shopping');
            return redirect()->back();
        }
        return view('checkout');
    }

    public function pay(){

        Stripe::setApiKey("sk_test_IiW3NQ57wok85iyBeO7utkgy");
        $token = \request('stripeToken');

        $charge = Charge::create([
            'amount' => Cart::total()*100,
            'currency' => 'usd',
            'description' => 'Books Charge',
            'source' => $token,
        ]);

        Session::flash('success','You card was charged successfully!');

        Cart::destroy();

        Mail::to(\request()->stripeEmail)->send(new PurchaseSuccessful());

        return redirect('/');

    }
}
