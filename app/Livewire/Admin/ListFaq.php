<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Faq;
use Livewire\WithPagination;


class ListFaq extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $faqId;

    public function performDeletion($faqId)
    {
        $faq = Faq::findOrFail($faqId);

        // Delete the service
        $faq->delete();

        // Dispatch a success message
        $this->dispatch('success', ['message' => 'The faq has been deleted successfully!']);
    }


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $faqs = Faq::query()
        ->when($this->search, function ($query) {
            $query->where(function ($query) {
                $query->where('answer', 'like', '%' . $this->search . '%')
                    ->orWhere('qustion', 'like', '%' . $this->search . '%');
            });
        })
        ->latest()
        ->paginate(10);

        return view('livewire.admin.list-faq', ['faqs' => $faqs]);
    }
}
