<?php

namespace App\Providers;

use App\Mail\UserRejectedMail;
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
