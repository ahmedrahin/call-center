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

    public function performDeletion($reviewId)
    {
        $review = Review::findOrFail($reviewId);

        if ($review->image) {
            $oldImagePath = public_path($review->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        // Delete the service
        $review->delete();

        // Dispatch a success message
        $this->dispatch('success', ['message' => 'Review has been deleted successfully!']);
    }

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
