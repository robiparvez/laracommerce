<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //get orders according to option (delivered, pending or all)
    //
    public function getOrdersByType($option = '')
    {
        if ($option == 'pending')
        {
            $orders = Order::where('delivered', '=', false)->get();
        }
        elseif ($option == 'delivered')
        {
            $orders = Order::where('delivered', '=', true)->get();
        }
        else
        {
            //if no option is passed,then get all
            $orders = Order::all();
        }

        return view('admin.orders.index', compact('orders'));
        dd($orders);
    }

    public function 	checkboxDeliver(Request $request, $id)
    {
        $order = Order::find($id);

        if ($request->has('delivered'))
        {
            $order->delivered = $request->delivered;
        }
        else
        {
            $order->delivered = false;
        }

        var_dump($order);

        $order->save();
        return back();

    }
}
