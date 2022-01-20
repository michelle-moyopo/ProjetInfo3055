<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserMail extends Mailable
{
    use Queueable, SerializesModels;

    public $userss;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userss)
    {
        $this-> userss = $userss;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Validation Account')
                    ->view('admin.email.usersend');
    }
}
