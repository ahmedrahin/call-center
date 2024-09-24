<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Review;

class AllReview extends Component
{   
    public $reviews;
    public function mount(){
        $this->reviews = Review::latest()->get();
    }

    public function render()
    {
        return view('livewire.all-review');
    }
}
