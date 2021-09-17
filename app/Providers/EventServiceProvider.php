<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use App\Events\Illuminate\Auth\Events\SelectedToReviewArticle;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use App\Listeners\Illuminate\Auth\Listeners\SendWelcomeNotification;
use App\Listeners\Illuminate\Auth\Listeners\SendReviewNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            SendWelcomeNotification::class,
        ],
        SelectedToReviewArticle::class => [
            SendReviewNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
