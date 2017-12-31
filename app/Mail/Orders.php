<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Order;

class Orders extends Mailable
{
    use Queueable, SerializesModels;
    protected $order;

    /**
     * Create a new message instance.
     */
    public function __construct(Order $orders)
    {
        $this->order = $orders;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->view('mails.viewOrders')->with([
            'name' => $this->order->user->name,
            'total_price' => $this->order->total_price
        ]);
    }
}
