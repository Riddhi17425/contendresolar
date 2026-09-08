<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendServiceMailToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $data; 

   public function __construct($serviceData)
    {
        $this->data = $serviceData; 
    }

    public function build()
    {
        return $this->subject('New Service Form Submission')
                    ->view('front.email.service_admin')
                    ->with('data', $this->data);
    }
}
