<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::content();
        return view('cart.index', compact('cartItems'));

    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $products  = Product::find($id);
        $sizeArray = ['small' => 'Small', 'medium' => 'Medium', 'large' => 'Large'];

        Cart::add($id, $products->name, 1, $products->price, $sizeArray);

        // $products_to_cart = Cart::add($id, $products->name, 1, $products->price, $sizeArray);

        // return view('cart.create', compact(['products', 'products_to_cart']));

    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
