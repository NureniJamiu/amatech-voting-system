<?php

namespace App\Livewire;

use App\Models\Candidate;
use App\Models\Position;
use Livewire\Component;

class VotingCenter extends Component
{

    public $positions;
    public $candidates;

    public $candidates_count;

    public function mount()
    {

        $this->positions = Position::withCount('candidate')->get();

        $this->candidates = Candidate::with('position')->get();

        $this->candidates_count = Candidate::count();

    }


    public function render()
    {
        return view('livewire.voting-center');
    }
}
