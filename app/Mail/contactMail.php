<?php

namespace App\Mail;

use App\Models\registration;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $contactMail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(registration $contactMail)
    {
        $this->contactMail = $contactMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contactmail')->with('contactMail', $this->contactMail);
    }
}
