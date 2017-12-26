<?php

namespace App\Http\Controllers;
use Auth;

class ShippingController extends Controller
{
    public function step1()
    {
        if (Auth::check()) //if user is authenticated,
        {
            return view('shipping.index'); //redirect to shipping
        }
        else
        {
            return redirect()->route('login');//else tell them to login/register
        }
    }

    public function shippingPost()
    {
       dd('caught shipping post');
    }
}
