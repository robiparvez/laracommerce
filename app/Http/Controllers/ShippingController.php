<?php
namespace App\Http\Controllers;
use Auth;
use Cartalyst\Stripe\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ShippingController extends Controller//CheckoutController - tuts
{

    public function shippingIndex()
    {
        // dd('caught shipping index');
        return view('front.shipping.index');
    }

    public function payment()
    {
        return view('front.payment.index');
    }

    public function storePayment(Request $request)
    {
        // Set your secret key: remember to change this to your live secret key in production
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey("sk_test_FGuswe1FxZrlNQz71jPjqvNa");

        // Token is created using Checkout or Elements!
        // Get the payment token ID submitted by the form:
        // $token = $_POST['stripeToken'];
        $token = $request->stripeToken;

        // Charge the user's card:
        $charge = \Stripe\Charge::create(array(
            "amount"               => Cart::total() * 100,
            "currency"             => "usd",
            "description"          => "Example charge",
            "statement_descriptor" => "Custom descriptor",
            "source"               => $token,
        ));
        // dd($charge);
    }
}
