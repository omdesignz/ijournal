<?php

namespace App\Listeners\Illuminate\Auth\Listeners;

use App\Events\Illuminate\Auth\Events\SelectedToReviewArticle;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReviewEMail;
use App\Models\User;
use App\Models\Article;

class SendReviewNotification
{
    public $user;
    public $article;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(User $user, Article $article)
    {
        $this->user = $user;
        $this->article = $article;
    }

    /**
     * Handle the event.
     *
     * @param  SelectedToReviewArticle  $event
     * @return void
     */
    public function handle(SelectedToReviewArticle $event)
    {
        Mail::to($event->user->email)->send(new ReviewEMail($event));
    }
}
