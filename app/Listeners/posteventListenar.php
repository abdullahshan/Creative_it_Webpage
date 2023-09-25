<?php

namespace App\Listeners;

use App\Models\post;
use Illuminate\Support\Facades\Cache;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class posteventListenar
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Cache()->forget('postdata');

       $post =  post::with('post_categories','user')->orderBy('created_at', 'desc')->take(5)->get();

       Cache()->forever('postdata', $post);

    }
 
}
