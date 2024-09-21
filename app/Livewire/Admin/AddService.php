<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class AddService extends Component
{
    use WithFileUploads;

    public $title;
    public $slug;
    public $short_title;
    public $description;
    public $image;
    public $thumb_image;

    protected $rules = [
        'title' => 'required|unique:services,title|max:30',
        'short_title' => 'required|max:70',
        'description' => 'required',
        'image' => 'required|image',
        'thumb_image' => 'required|image',
    ];

    public function add(){
        $this->validate();

        $service = [
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'short_title' => $this->short_title,
            'description' => $this->description,
        ];

        if ($this->image) {
            $thisImage = $this->image;
            $imageName = time() . '_' . $thisImage->getClientOriginalName();
            $path = $thisImage->storeAs('uploads', $imageName, 'public');
            $service['image'] = 'uploads/' . $imageName;
        }

        if ($this->thumb_image) {
            $thisImage = $this->thumb_image;
            $imageName = time() . '_' . $thisImage->getClientOriginalName();
            $path = $thisImage->storeAs('uploads', $imageName, 'public');
            $service['thumb_image'] = 'uploads/' . $imageName;
        }
        
        Service::create($service);

        $this->reset(['title', 'slug', 'short_title', 'description', 'image', 'thumb_image']);
        $this->dispatch('success', ['message' => 'The service is addedd']);

    }

    public function render()
    {
        return view('livewire.admin.add-service');
    }
}
