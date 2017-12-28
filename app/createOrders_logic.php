<?php

Class Order_test
{
    public static function createOrders()
    {
        // relationship between orders and users needed to use users here

        // Get Users
        $users = Auth::user();

        // Create Orders, using  user(authenticated)
        $orders = $users->orders()->create([
            'total_price' => Cart::total(), // use items in our cart, to create orders
            'delivered'   => false,
        ]);

        //put orders in order_product(pivot) table, for each cart items
        $cartItems = Cart::content();
        foreach ($cartItems as $cartItem)
        {
            $orders->products()->attach($cartItem->id, [
                'qty'          => $cartItem->qty,
                'total_amount' => $cartItem->qty * $cartItem->price,
            ]);
        }
    }

}

?>


