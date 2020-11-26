<?php

/*
    Author: Jimm Inciong
    Created At: 10/11/2020
    Modified Last At: 26/11/2020
*/

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendCustomerMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $name;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data) {
        $this->data = $data;
        $this->name = $data['name'];
        $this->email = $data['email'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->from($email = $this->email, $name = $this->name)
        return $this->from('no-reply@cloudcopy.services')
        ->replyTo('no-reply@cloudcopy.services')
        ->subject('Customer Enquiry')
        ->view('email.message')
        ->with('data', $this->data);
    }
}
