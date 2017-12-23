<?php

namespace App\Http\Controllers;
use App\Product;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function shirts()
    {
        $shirts = Product::all();
        return view('front.shirts', compact('shirts'));
    }

    public function single()
    {
    	return view('front.single');
    }
}
