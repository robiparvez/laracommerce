<?php

namespace App\Http\Controllers;
use App\Product;

class FrontController extends Controller
{
    public function index()
    {
        $shirts = Product::orderBy('id', 'DESC')->get();

        return view('front.home', compact('shirts'));
    }

    public function shirts()
    {
        $shirts = Product::orderBy('id', 'DESC')->get();
        return view('front.shirts', compact('shirts'));
    }

    public function single()
    {
    	return view('front.single');
    }
}
