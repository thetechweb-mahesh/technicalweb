<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
// use Illuminate\Mail\Mailables\Content;
// use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;

    /**
     * Create a new message instance.
     *  @return void
     */
    public function __construct($details)
    {
        $this->details =$details;
    }

    /**
     * Get the message envelope.
     */

    /**
     * @return $this
     */
    public function build()
    {


        return $this->subject('Contact Message')->view('emails.ContactMail');
    }


}
