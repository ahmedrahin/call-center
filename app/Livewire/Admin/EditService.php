<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class EditService extends Component
{
    use WithFileUploads;

    public $serviceId;
    public $title;
    public $slug;
    public $short_title;
    public $description;
    public $image;
    public $thumb_image;
    public $existing_image;
    public $existing_thumb_image;


    public function mount($id)
    {
        $service = Service::findOrFail($id);
        $this->serviceId = $service->id;

        $this->title = $service->title;
        $this->short_title = $service->short_title;
        $this->description = $service->description;
        $this->existing_image = $service->image;
        $this->existing_thumb_image = $service->thumb_image;
    }

    protected function rules()
    {
        return [
            'title' => 'required|max:30|unique:services,title,' . $this->serviceId,
            'short_title' => 'required|max:70',
            'description' => 'required',
            'image' => 'nullable|image',
            'thumb_image' => 'nullable|image',
        ];
    }

    public function update()
    {
        $this->validate($this->rules());

        $service = Service::findOrFail($this->serviceId);

        // Handle the main image (service image)
        if ($this->image) {
            // Delete the old image if it exists
            $oldImagePath = public_path($service->image);
            if ($service->image && file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            // Handle new image upload
            $thisImage = $this->image;
            $imageName = time() . '_' . $thisImage->getClientOriginalName();
            $path = $thisImage->storeAs('uploads', $imageName, 'public');
            $service['image'] = 'uploads/' . $imageName;
        }

        // Handle the thumbnail image
        if ($this->thumb_image) {
            // Delete the old thumbnail image if it exists
            $oldThumbImagePath = public_path($service->thumb_image);
            if ($service->thumb_image && file_exists($oldThumbImagePath)) {
                unlink($oldThumbImagePath);
            }

            // Handle new thumbnail upload
            $thisImage = $this->thumb_image;
            $imageName = time() . '_' . $thisImage->getClientOriginalName();
            $path = $thisImage->storeAs('uploads', $imageName, 'public');
            $service['thumb_image'] = 'uploads/' . $imageName;
        }

        // Update other service details
        $service->title = $this->title;
        $service->short_title = $this->short_title;
        $service->description = $this->description;

        // Save the updated service details to the database
        $service->save();
        
        // Dispatch a success event or message
        $this->dispatch('success', ['message' => 'Service updated successfully']);

    }


    public function render()
    {
        return view('livewire.admin.edit-service');
    }
}
