<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithFileUploads;

class EditEmployee extends Component
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
    public $existing_image;
    public $employeeId;

    public function mount($id = null)
    {
        if ($id) {
            // Find the employee record by ID and pre-fill the fields
            $employee = Employee::findOrFail($id);

            $this->fill([
                'employeeId' => $employee->id,
                'name' => $employee->name,
                'post' => $employee->post,
                'salary' => $employee->salary,
                'description' => $employee->description,
                'facebook_link' => $employee->facebook_link,
                'instagam_link' => $employee->instagam_link,
                'email' => $employee->email,
                'phone' => $employee->phone,
                'existing_image' => $employee->image,
            ]);
        }
    }

    protected $rules = [
        'name' => 'required',
        'post' => 'required',
        'email' => 'required|email',
        'phone' => 'numeric'
    ];

    public function update()
    {
        // Validate the form inputs
        $this->validate();

        // Find the employee by their ID
        $employee = Employee::findOrFail($this->employeeId);

        // Handle the new image upload
        if ($this->image) {
            // Delete the old image if it exists
            if ($employee->image && file_exists(public_path($employee->image))) {
                unlink(public_path($employee->image));
            }

            // Store the new image
            $imageName = time() . '_' . $this->image->getClientOriginalName();
            $path = $this->image->storeAs('uploads', $imageName, 'public');
            $employee->image = 'uploads/' . $imageName;
        }elseif ($this->existing_image === null) {
            // If the existing image is null, remove the image from the employee record
            if ($employee->image && file_exists(public_path($employee->image))) {
                unlink(public_path($employee->image));
            }
            $employee->image = null; // Clear the image path from the database
        }

        // Update the employee details using array
        $employee->update([
            'name' => $this->name,
            'post' => $this->post,
            'salary' => $this->salary,
            'description' => $this->description,
            'facebook_link' => $this->facebook_link,
            'instagam_link' => $this->instagam_link,
            'email' => $this->email,
            'phone' => $this->phone,
            // If image was uploaded, $employee->image is already set above
        ]);

        // Dispatch a success event or message
        $this->dispatch('success', ['message' => 'Employee data updated successfully']);
    }


    public function removeImage()
    {
        $this->reset('image', 'existing_image'); 
        $this->existing_image = null;
    }
    
    public function render()
    {
        return view('livewire.admin.edit-employee');
    }
}
