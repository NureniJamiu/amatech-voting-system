<?php

namespace App\Providers;

use App\Mail\UserRejectedMail;
use App\Providers\UserRejected;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendUserRejectedNotification
{
    /**
     * Handle the event.
     */
    public function handle(UserRejected $event): void
    {
        $user = $event->user;

        Mail::to($user->email)->send(new UserRejectedMail($user));
    }
}
