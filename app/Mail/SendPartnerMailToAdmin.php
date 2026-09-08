<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPartnerMailToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $data; 

   public function __construct($partnerData)
    {
        $this->data = $partnerData; 
    }

    public function build()
    {
        return $this->subject('New Partner Form Submission')
                    ->view('front.email.partner_admin')
                    ->with('data', $this->data);
    }
}
