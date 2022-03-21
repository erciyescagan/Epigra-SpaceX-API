<?php

namespace App\Listeners;

use App\Events\SyncCompleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class Logger
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
    public function handle(SyncCompleted $event)
    {
        Log::channel('single')->info(json_decode(json_encode($event->capsule), true));

    }
}
