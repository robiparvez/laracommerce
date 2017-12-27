<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanksController extends Controller
{
    public function getMessage()
    {
    	return view('front.thanks.index');
    }
}
