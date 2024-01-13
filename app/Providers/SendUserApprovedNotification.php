<?php

namespace App\Providers;

use App\Mail\UserApprovedCongratulations;
use App\Providers\UserApproved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
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
