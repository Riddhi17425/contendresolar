<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendCareerMailToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $data; 

   public function __construct($careerData)
    {
        $this->data = $careerData; 
    }

    public function build()
{
    $email = $this->subject('New Career Form Submission')
        ->view('front.email.career_admin')
        ->with('data', $this->data);

    // ✅ yahin resume attach hoga
    if (!empty($this->data['resume']) &&
        file_exists(public_path($this->data['resume']))) {

        $email->attach(public_path($this->data['resume']));
    }

    return $email;
}

}
