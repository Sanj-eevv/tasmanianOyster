<?php

namespace App\Listeners;

use App\Mail\OrderCreatedMail;
use App\Mail\OrderReceivedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Events\OrderCreated;


class SendOrderCreatedMail implements ShouldQueue
{
     public function __construct()
    {
    }

    public function handle(OrderCreated $event): void
    {
         Mail::to($event->order->getAttribute('email'))->send(new OrderCreatedMail($event->order));
         Mail::to(config('app.admin.email'))->send(new OrderReceivedMail($event->order));
    }
}
