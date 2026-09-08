<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendDistributorMailToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $data; 

   public function __construct($distributorData)
    {
        $this->data = $distributorData; 
    }

    public function build()
    {
        return $this->subject('New Distributor Form Submission')
                    ->view('front.email.distributor_admin')
                    ->with('data', $this->data);
    }
}
