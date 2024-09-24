<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Employee;

class Team extends Component
{
    public $employees;
    
    public function mount(){
        $this->employees = Employee::latest()->get();
    }

    public function render()
    {
        return view('livewire.team');
    }
}
