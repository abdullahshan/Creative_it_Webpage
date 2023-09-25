<?php

namespace App\Providers;

use App\Events\postcreated;
use App\Events\postdeleted;
use App\Events\postupdeted;
use App\Listeners\posteventListenar;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        postcreated::class => [
            posteventListenar::class,
        ],

        postupdeted::class => [
            posteventListenar::class,
        ],

        postdeleted::class => [
            posteventListenar::class,
        ]
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
