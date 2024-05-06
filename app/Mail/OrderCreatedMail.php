<?php
declare(strict_types = 1);

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderCreatedMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct(public Order $order)
    {
         $this->order->loadMissing('johnReserve');
    }

    public function envelope(): Envelope
    {
        return new Envelope(
             from: new Address(config('app.admin.email'), config('app.name')),
             subject: 'New Order Created',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mails.order-created',
        );
    }


    public function attachments(): array
    {
        return [];
    }
}
