<?php

namespace App\Providers;

use App\Mail\UserApprovedCongratulations;
use Illuminate\Support\Facades\Mail;

class SendUserApprovedNotification
{
    /**
     * Handle the event.
     */
    public function handle(UserApproved $event): void
    {
        $user = $event->user;

        Mail::to($user->email)->send(new UserApprovedCongratulations($user));
    }
}
