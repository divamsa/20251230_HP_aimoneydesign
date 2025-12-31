<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactAutoReplyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = match($this->contact->type) {
            Contact::TYPE_INQUIRY => '【自動返信】お問い合わせありがとうございます | 株式会社マネーデザイン',
            Contact::TYPE_DOWNLOAD => '【自動返信】資料請求ありがとうございます | 株式会社マネーデザイン',
            Contact::TYPE_CONSULTATION => '【自動返信】無料相談の申し込みありがとうございます | 株式会社マネーデザイン',
            default => '【自動返信】お問い合わせありがとうございます | 株式会社マネーデザイン',
        };

        return new Envelope(
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-auto-reply',
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

