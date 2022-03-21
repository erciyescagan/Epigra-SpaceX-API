<?php

namespace App\Listeners;

use App\Events\SyncCompleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class Mailer
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
        $details = [
            'title' => 'SpaceX Capsule Information',
            'body' => json_encode($event)
        ];
        Mail::to('erciyescagan@gmail.com')->send(new \App\Mail\UpdatedCapsule($details));
    }
}
