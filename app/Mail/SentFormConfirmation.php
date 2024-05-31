<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class SentFormConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    private $qrName;
    private $qr;
    /**
     * Create a new message instance.
     */
    public function __construct(string $qrName, string $qr)
    {
        //
        $this->qrName = $qrName;
        $this->qr = $qr;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(env("MAIL_FROM_ADDRESS", "omargerardoguerrero@gmail.com"), env("MAIL_FROM_NAME", "Omar Rosales")),
            subject: 'Sent Form Confirmation',
        );
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('My Test Email')
            ->view('mail.sentformconfirmation')
            ->with([
                'fileName' => $this->qrName,
                'qr' => $this->qr
            ]);
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.sentformconfirmation',
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
