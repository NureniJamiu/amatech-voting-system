<?php

namespace App\Livewire;

use App\Models\Candidate;
use App\Models\Position;
use App\Models\Vote;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class VotingCenter extends Component implements HasActions, HasForms
{
    use InteractsWithActions;
    use InteractsWithForms;

    public $positions;

    public $candidates;

    public $candidates_count;

    public $loading = false;

    public $now;

    public $expirationDate;

    public function mount()
    {

        $this->positions = Position::withCount('candidate')->get();

        $this->candidates = Candidate::with('position')->get();

        $this->candidates_count = Candidate::count();

        $this->now = now();

        $this->expirationDate = $this->now->addHours(8);

    }

    public function voteCandidate(): Action
    {
        return Action::make('voteCandidate')
            ->requiresConfirmation()
            ->size('lg')
            ->action(function (array $arguments) {

                $current_user = Auth::user();

                $prev_vote = DB::table('votes')
                    ->where('voter_id', $current_user->id)
                    ->where('candidate_position', $arguments['candidate_position'])
                    ->first();
                if ($prev_vote) {

                    Notification::make()
                        ->title('Sorry, you\'ve already voted a candidate for this position')
                        ->danger()
                        ->send();

                    return;
                }

                $vote = new Vote;

                $vote->voter_id = $current_user->id;
                $vote->candidate_name = $arguments['candidate_name'];
                $vote->candidate_position = $arguments['candidate_position'];

                $vote->save();

                Notification::make()
                    ->title('Candidate voted successfully')
                    ->success()
                    ->send();
            });
    }

    public function render()
    {
        return view('livewire.voting-center');
    }
}
