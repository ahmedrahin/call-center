<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;

class ServicePage extends Component
{   
    public $services;

    public function mount(){
        $this->services = Service::latest()->get();
    }

    public function render()
    {
        return view('livewire.service-page');
    }
}
