<?php

namespace App\Mail\Application\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Application;

class RegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Application.
     *
     * @var \App\Application
     */
    public $application;

    /**
     * Create a new message instance.
     *
     * @param  \App\Application  $application
     * @return void
     */
    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject( config('app.name') . ' New Applicant' )
                    ->markdown('mail.application.admin.registration');
    }
}
