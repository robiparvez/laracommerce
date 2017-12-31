<?php

namespace App\Mail;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Orders_shipped extends Mailable
{
    use Queueable, SerializesModels;

    protected $order;

    public function __construct(Order $orders)
    {
        $this->order = $orders;
    }

    public function build()
    {
        return $this->markdown('mails.markdown.viewOrders')->with([
            'name'        => $this->order->user->name,
            'total_price' => $this->order->total_price,

        ]);
    }
}
