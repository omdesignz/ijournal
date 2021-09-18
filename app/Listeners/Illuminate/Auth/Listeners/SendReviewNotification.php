<?php

namespace App\Listeners\Illuminate\Auth\Listeners;

use App\Models\User;
use App\Models\Article;
use App\Mail\ReviewEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\Illuminate\Auth\Events\SelectedToReviewArticle;

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
        Mail::to($event->user->email)->send(new ReviewEmail($event));
    }
}
