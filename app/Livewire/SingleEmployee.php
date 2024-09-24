<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Employee;

class SingleEmployee extends Component
{   
    public $employee;

    public function mount($id = null)
    {
        if ($id) {
            $this->employee = Employee::findOrFail($id);
        }
    }

    public function render()
    {
        return view('livewire.single-employee');
    }
}
