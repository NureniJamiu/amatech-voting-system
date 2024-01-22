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
use Masmerise\Toaster\Toaster;

class VotingCenter extends Component implements HasForms, HasActions
{

    use InteractsWithActions;
    use InteractsWithForms;

    public $positions;
    public $candidates;

    public $candidates_count;

    public $loading = false;

    public function mount()
    {

        $this->positions = Position::withCount('candidate')->get();

        $this->candidates = Candidate::with('position')->get();

        $this->candidates_count = Candidate::count();

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
                        ->title('Sorry, you\ve already voted a candidate for this position')
                        ->danger()
                        ->send();
                    return;
                };

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

    public function handleClick($candidate_name, $candidate_position)
    {

        $current_user = Auth::user();

        if (!$current_user) {
            return;
        }

        // set loading variable
        $this->loading = true;

        // find vote where the voter_id equals current_user_id AND candidate_position equals candidate_position [args]
        $prev_vote = DB::table('votes')
            ->where('voter_id', $current_user->id)
            ->where('candidate_position', $candidate_position)
            ->first();
        // if vote exists, return with a message "Sorry, you've already voted a candidate"
        if ($prev_vote) {
            // Show error message
            // session()->flash('message', ["type" => "error", "content" => "Sorry, You've already voted a candidate for this position"]);

            Toaster::success('Sorry, You\'ve already voted a candidate for this position!');
            // dd("Sorry, can't perform this operation");

            // Reset loading state
            $this->loading = false;

            return;
        };

        // if no vote exist, create a new vote.
        $vote = new Vote;

        $vote->voter_id = $current_user->id;
        $vote->candidate_name = $candidate_name;
        $vote->candidate_position = $candidate_position;
        // $vote->poll_id = $position->poll->id;

        $vote->save();
        // dd("Voted successfully!");

        // Reset loading state
        $this->loading = false;

        // Show success message
        // session()->flash('message', ["type" => "success", "content" => "Voted successfully!"]);

        Toaster::success('Voted Successfully!');

    }

    public function render()
    {
        return view('livewire.voting-center');
    }
}
