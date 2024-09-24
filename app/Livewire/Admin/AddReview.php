<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Review;

class AddReview extends Component
{
    use WithFileUploads;
    public $name;
    public $job_title;
    public $message;
    public $image;

    protected $rules = [
        'name' => 'required|max:70',
        'message' => 'required|max:350',
        'image' => 'nullable|image'
    ];

    public function add(){
        $this->validate();

        $review = [
            'name' => $this->name,
            'job_title' => $this->job_title,
            'message' => $this->message,
        ];

        if ($this->image) {
            $thisImage = $this->image;
            $imageName = time() . '_' . $thisImage->getClientOriginalName();
            $path = $thisImage->storeAs('uploads', $imageName, 'public');
            $review['image'] = 'uploads/' . $imageName;
        }
        
        Review::create($review);

        $this->reset(['name', 'image', 'job_title', 'message']);
        $this->dispatch('success', ['message' => 'The review is addedd']);

    }

    public function render()
    {
        return view('livewire.admin.add-review');
    }
}
