<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Faq;

class AddFaq extends Component
{   
    public $qustion;
    public $answer;

    protected $rules = [
        'qustion' => 'required',
        'answer' => 'required',
    ];

    public function add(){
        $this->validate();

        $review = [
            'answer' => $this->answer,
            'qustion' => $this->qustion,
        ];
        
        Faq::create($review);
        
        $this->reset(['answer', 'qustion']);
        $this->dispatch('success', ['message' => 'The faq is addedd']);

    }

    public function render()
    {
        return view('livewire.admin.add-faq');
    }
}
