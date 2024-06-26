<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address; 
class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
     public $feedback;
    /**
     * Create a new message instance.
     */
    public function __construct($feedback)
    {
         $this->feedback = $feedback;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('vut200202@gmail.com', 'From Vu'),
            replyTo: [
                new Address('vut200202@gmail.com', 'To Vu'),
            ],
            subject: 'Phản hồi của shop thực phẩm Orgarnic',
        );
    }

    /**
     * Get the message content definition.
     */
   public function content(): Content
    {
        return new Content(
            view: 'emails.interfaceContact',
            with: [
              'feedback' => $this->feedback,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
