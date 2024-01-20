<?php

namespace App\Livewire;

use App\Models\Candidate;
use Livewire\Component;

class Candidates extends Component
{
    public $candidates;


    public function mount()
    {
        $this->candidates = Candidate::with('position')->get();
    }
   

    public function render()
    {
        return view('livewire.candidates');
    }

}
