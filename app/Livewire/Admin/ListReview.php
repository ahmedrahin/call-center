<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Review;
use Livewire\WithPagination;

class ListReview extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $reviewId;

    // public function performDeletion($serviceId)
    // {
    //     $service = Service::findOrFail($serviceId);

    //     if ($service->image) {
    //         $oldImagePath = public_path($service->image);
    //         if (file_exists($oldImagePath)) {
    //             unlink($oldImagePath);
    //         }
    //     }

    //     if ($service->thumb_image) {
    //         $oldImagePath = public_path($service->thumb_image);
    //         if (file_exists($oldImagePath)) {
    //             unlink($oldImagePath);
    //         }
    //     }

    //     // Delete the service
    //     $service->delete();

    //     // Dispatch a success message
    //     $this->dispatch('success', ['message' => 'Service has been deleted successfully!']);
    // }

    public function render()
    {
        $reviews = Review::query()
        ->when($this->search, function ($query) {
            $query->where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('message', 'like', '%' . $this->search . '%')
                    ->orWhere('job_title', 'like', '%' . $this->search . '%');
            });
        })
        ->latest()
        ->paginate(10);

        return view('livewire.admin.list-review', compact('reviews'));
    }
}
