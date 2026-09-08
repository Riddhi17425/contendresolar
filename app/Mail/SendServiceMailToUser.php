<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendServiceMailToUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function build()
    {
        return $this->subject('New Service Form Submission')
                   ->view('front.email.servicesubmit');
    }
}
