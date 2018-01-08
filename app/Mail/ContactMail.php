<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{

    use Queueable, SerializesModels;

    /**
     * Name
     *
     * @var
     */
    protected $name;

    /**
     * E-mail
     *
     * @var
     */
    protected $email;

    /**
     * Message
     *
     * @var
     */
    protected $message;

    /**
     * ContactMail constructor.
     *
     * @param $name
     * @param $email
     * @param $message
     */
    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Contato via site')
            ->markdown('emails.contact', [
                'name'    => $this->name,
                'email'   => $this->email,
                'message' => $this->message
            ]);
    }
}
