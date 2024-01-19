<?php

namespace App\Livewire;

use App\Models\Candidate;
use Livewire\Component;

class Candidates extends Component
{
    public $candidates;


   

    public function render()
    {
        return view('livewire.candidates');
    }

    public function mount()
    {
        // Fetch all candidates from the database
        $this->candidates = Candidate::with('position')->get();
    }

}
