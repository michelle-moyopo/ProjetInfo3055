<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewRespoMail extends Mailable
{
    use Queueable, SerializesModels;

    public  $mail_data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $mail_data)
    {
        $this-> mail_data =  $mail_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->subject('Validation Account')->view('director.email.newAccount');
    }
}

