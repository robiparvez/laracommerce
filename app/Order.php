<?php

namespace App;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    protected $fillable = ['total_price', 'delivered'];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('qty', 'total_amount'); //pivot table(order_product) info's only
    }

    public static function createOrders()
    {
        $users = Auth::user();

        $orders = $users->orders()->create([
            'total_price' => Cart::total(),
            'delivered'   => false,
        ]);

        $cartItems = Cart::content(); //put orders in order_product(pivot) table, for each cart items
        foreach ($cartItems as $cartItem)
        {
            $orders->products()->attach($cartItem->id, [
                'qty'          => $cartItem->qty,
                'total_amount' => $cartItem->qty * $cartItem->price,
            ]);
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
