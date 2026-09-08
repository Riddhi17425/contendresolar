<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendDistributorMailToUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $company_name;
     
     public function __construct($company_name)
    {
        $this->company_name = $company_name;
    }
    public function build()
    {
        return $this->subject('New Distributor Form Submission')
                   ->view('front.email.distributorsubmit');
    }
}
