<?php

namespace App\Console\Commands;

use App\Models\Poll;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UpdatePollStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'polls:update-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update poll status if end time has passed';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $now = Carbon::now();

        Poll::where('end_time', '<=', $now)
            ->where('is_active', true)
            ->update(['is_active' => false]);

        $this->info('Voting in this poll has ended.');
    }
}
