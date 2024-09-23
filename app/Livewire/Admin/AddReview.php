<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Review;

class AddReview extends Component
{
    use WithFileUploads;
    public $name;
    public $post;
    public $description;
    public $image;

    

    public function render()
    {
        return view('livewire.admin.add-review');
    }
}
