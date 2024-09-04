<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $phone;
    public $content;

    public function __construct($email, $phone, $content)
    {
        $this->email = $email;
        $this->phone = $phone;
        $this->content = $content;
    }

    public function build()
    {
        return $this->subject('Nova Mensagem do Formulário de Contato')
                    ->view('emails.contact-form')
                    ->with(['email' => $this->email, 'phone' => $this->phone, 'message' => $this->content,]);
    }
}
