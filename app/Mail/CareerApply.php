<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Contracts\Queue\ShouldQueue;

class CareerApply extends Mailable
{
    use Queueable, SerializesModels;
	protected $data;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            //'from' => [
            //    'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
            //    'name' => env('MAIL_FROM_NAME', 'Example'),
            //],
            subject: $this->data->subjects,
			replyTo: $this->data->sender,
			to: $this->data->receivers,
            bcc: $this->data->bcc,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.career.career',
            with: ['data' => $this->data],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        if (isset($this->data->attachmentPath)) {
            $path = storage_path('app/public/' . $this->data->attachmentPath);
            return [
                Attachment::fromPath($path),
            ];
        };

        return [];
    }
}
