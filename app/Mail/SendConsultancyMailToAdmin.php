<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendConsultancyMailToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $data; 

   public function __construct($consultancyData)
    {
        $this->data = $consultancyData; 
    }

    public function build()
    {
        return $this->subject('New Consultancy Form Submission')
                    ->view('front.email.consultancy_admin')
                    ->with('data', $this->data);
    }
}
