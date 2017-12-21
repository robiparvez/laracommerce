<?php

namespace App\Http\Controllers;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function shirts()
    {
        return view('front.shirts');
    }

    public function single()
    {
    	return view('front.single');
    }
}
