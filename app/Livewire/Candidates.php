<?php

namespace App\Livewire;

use Livewire\Component;

class Candidates extends Component
{
    public $candidates;


    public function render()
    {
        return view('livewire.candidates');
    }

    
}
