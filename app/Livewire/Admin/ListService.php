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

    protected $listeners = ['deleteMessage'];

    

    public function confirmDeletion($serviceId)
{
    $this->dispatch('confirm', [
        'title' => 'Are you sure?',
        'text' => 'You won\'t be able to revert this!',
        'icon' => 'warning',
        'confirmButtonText' => 'Yes, delete it!',
        'cancelButtonText' => 'Cancel',
        'onConfirmed' => 'deleteService', // Call this method if confirmed
        'onCancelled' => 'cancelDeletion' // Optional method if cancelled
    ])->to('confirmDeletion', $serviceId); // Passing the ID to the callback
}

public function deleteService($serviceId)
{
    $service = Service::findOrFail($serviceId);
    
    // Delete the service
    $service->delete();

    // Optionally, you can dispatch a success message here
    $this->dispatch('success', ['message' => 'Service has been deleted.']);
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
