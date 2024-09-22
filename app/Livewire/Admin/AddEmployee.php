<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithFileUploads;

class AddEmployee extends Component
{
    use WithFileUploads;

    public $name;
    public $post;
    public $salary;
    public $description;
    public $image;
    public $facebook_link;
    public $instagam_link;
    public $email;
    public $phone;

    protected $rules = [
        'name' => 'required',
        'post' => 'required',
        'email' => 'required|email',
        'phone' => 'numeric'
    ];

    public function add(){
        $this->validate();

        $employee = [
            'name'          => $this->name,
            'post'          => $this->post,
            'salary'        => $this->salary,
            'description'   => $this->description,
            'facebook_link' => $this->facebook_link,
            'instagam_link' => $this->instagam_link,
            'email'         => $this->email,
            'phone'         => $this->phone,

        ];

        if ($this->image) {
            $thisImage = $this->image;
            $imageName = time() . '_' . $thisImage->getClientOriginalName();
            $path = $thisImage->storeAs('uploads', $imageName, 'public');
            $employee['image'] = 'uploads/' . $imageName;
        }
        
        Employee::create($employee);

        $this->reset(['name', 'post', 'salary', 'description', 'image', 'facebook_link', 'instagam_link', 'email', 'phone']);
        $this->dispatch('success', ['message' => 'The employee is addedd']);

    }

    public function removeImage()
    {
        $this->reset('image'); 
    }

    public function render()
    {
        return view('livewire.admin.add-employee');
    }
}
