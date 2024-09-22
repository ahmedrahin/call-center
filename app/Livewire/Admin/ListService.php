<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithPagination;

class ListService extends Component
{   
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $serviceId;
    protected $listeners = ['deleteMessage'];

    

    public function performDeletion($serviceId)
    {
        $service = Service::findOrFail($serviceId);

        if ($service->image) {
            $oldImagePath = public_path($service->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        if ($service->thumb_image) {
            $oldImagePath = public_path($service->thumb_image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        // Delete the service
        $service->delete();

        // Dispatch a success message
        $this->dispatch('success', ['message' => 'Service has been deleted successfully!']);
    }


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {   
        $services = Service::query()
        ->when($this->search, function ($query) {
            $query->where(function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('short_title', 'like', '%' . $this->search . '%');
            });
        })
        ->latest()
        ->paginate(10);
        
        return view('livewire.admin.list-service', ['services' => $services]);
    }
}
