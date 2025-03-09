<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;

    
    public function __construct($contactData)
    {
        $this->contactData = $contactData;
    }

    
    public function build()
    {
        return $this->from($this->contactData['email'], $this->contactData['name']) 
                    ->to('rahmanmahia19@gmail.com') 
                    ->subject('New Contact Us Message')
                    ->view('emails.contactUs') 
                    ->with('contactData', $this->contactData);
    }
}
