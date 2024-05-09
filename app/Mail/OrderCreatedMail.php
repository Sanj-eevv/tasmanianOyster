<?php
declare(strict_types = 1);

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;
use function Spatie\LaravelPdf\Support\pdf;


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
             subject: 'New Order Created',
        );
    }

     public function attachments(): array
     {
          $name = "invoice-{$this->order->getAttribute('id')}".Carbon::now()->format('Y-m-d').".pdf";
          $pdf = pdf()
               ->view('mails.order-created', ['order' => $this->order])
               ->base64();
          return [
               Attachment::fromData(fn () => base64_decode($pdf), $name)->withMime('application/pdf'),
          ];
     }

    public function content(): Content
    {
        return new Content(
            text: 'mails.order-created-text',
        );
    }

}
