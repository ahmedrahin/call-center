<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\ContactMessage;
use Livewire\WithPagination;


class ShowMessage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $selectedMessages = [];
    public $search = '';
    

    public function deleteSelected()
    {
        // Delete selected messages
        ContactMessage::whereIn('id', $this->selectedMessages)->delete();
        $this->selectedMessages = []; 
        $this->dispatch('success', ['message' => 'The selected messages have been deleted.']);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $messages = ContactMessage::query()
            ->where('name', 'like', '%'.$this->search.'%')
            ->orWhere('email', 'like', '%'.$this->search.'%')
            ->orWhere('phone', 'like', '%'.$this->search.'%')
            ->orWhere('message', 'like', '%'.$this->search.'%')
            ->latest()
            ->paginate(10);

        return view('livewire.admin.show-message', [
            'messages' => $messages,
        ]);
    }
}
