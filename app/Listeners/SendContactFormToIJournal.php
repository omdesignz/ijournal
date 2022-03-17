<?php

namespace App\Listeners;

use App\Events\SubmitedContactForm;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;


class SendContactFormToIJournal
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
        Mail::to('vmanuel@gestlab.co.ao')->send(new ContactEmail($event));
    }
}
