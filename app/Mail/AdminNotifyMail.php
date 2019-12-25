<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminNotifyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $user)
    {
        $this->email = $email;
        $this->user =  $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('User '.$this->user->name.' change setting')
            ->view('emails.admin-email', ['email' => $this->email, 'user' => $this->user   ]);
    }
}
