<?php

namespace App\Listeners;

use App\Events\SubmitedContactForm;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\ContactReceivedEmail;
use Illuminate\Support\Facades\Mail;

class SendContactFormNotificationToSender
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\SubmitedContactForm  $event
     * @return void
     */
    public function handle(SubmitedContactForm $event)
    {
        Mail::to($event->email)->send(new ContactReceivedEmail($event));
    }
}
