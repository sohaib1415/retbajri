<?php

namespace App\Mail;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->email=$request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return
        $this->subject('Contact Us Email from http://retbajri.com')
        ->from($this->email->email, $this->email->name)
       // ->cc('sohaib1415@gmail.com')
        ->to('sohaib1415@gmail.com', 'Admin')
        ->view('pages.email');
       // return $this->view('sma.email');
    }
}
