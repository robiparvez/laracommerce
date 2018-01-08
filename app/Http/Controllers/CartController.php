<?php

namespace App\Http\Controllers;

use App\Category;
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
        $products = Product::find($id);

//        $categories = Category::all();

        Cart::add($id, $products->name, 1, $products->price, ['size' => 'large']);
        return redirect()->route('cart.index')->with('cart_add', 'Item Added to Cart!');

    }

    public function update(Request $request, $id)
    {
        Cart::update($id, [
            'qty'     => $request->qty,
            'options' => ['size' => $request->size], //size is user-defined
        ]);
        return back()->with('cart_update', 'Item Updated to Cart Successfully!');
    }

    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('cart_delete', 'Item Deleted From Cart!');
    }
}
