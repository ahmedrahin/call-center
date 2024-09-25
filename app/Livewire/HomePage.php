<?php

namespace App\Livewire;
use App\Models\Faq;

use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {   
        $faqs = Faq::latest()->limit(4)->get();
        return view('livewire.home-page', compact('faqs'));
    }
}
