<?php
namespace App\Http\Controllers;
use App\Order;
use Cartalyst\Stripe\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ShippingController extends Controller//CheckoutController - tuts
{

    public function shippingIndex()
    {
        return view('front.shipping.index');
    }

    public function payment()
    {
        return view('front.payment.index');
    }

    public function storePayment(Request $request)
    {
        \Stripe\Stripe::setApiKey("sk_test_FGuswe1FxZrlNQz71jPjqvNa");

        $token = $request->stripeToken;

        $charge = \Stripe\Charge::create(array(
            "amount"               => Cart::total() * 100,
            "currency"             => "usd",
            "description"          => "Example charge",
            "statement_descriptor" => "Custom descriptor",
            "source"               => $token,
        ));

        Order::createOrders();
        return "Orders Created Sucessfully!";

    }
}
