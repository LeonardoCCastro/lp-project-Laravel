<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactFormComponent extends Component
{
    public $email;
    public $phone;
    public $content;

    protected $rules = [
        'email' => 'required|email',
        'phone' => 'required',
        'content' => 'required',
    ];

    protected $messages = [
        'email.required' => 'O campo e-mail é obrigatório.',
        'email.email' => 'O e-mail deve ser um endereço de e-mail válido.',
        'phone.required' => 'O campo telefone é obrigatório.',
        'content.required' => 'O campo mensagem é obrigatório.',
    ];

    public function submit()
    {
        $this->validate();

        // Envia o email
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactFormMail($this->email, $this->phone, $this->content));

        // Reseta os campos do formulário
        $this->resetForm();

        // Notifica o usuário de que a mensagem foi enviada
        session()->flash('message', 'Mensagem enviada com sucesso!');
    }

    private function resetForm()
    {
        $this->email = '';
        $this->phone = '';
        $this->content = '';
    }

    public function render()
    {
        return view('livewire.contact-form-component');
    }
}

