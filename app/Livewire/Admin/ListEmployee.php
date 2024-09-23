<?php

namespace App\Livewire\Admin;
use App\Models\Employee;
use Livewire\WithPagination;

use Livewire\Component;

class ListEmployee extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $employeeId;

    public function performDeletion($employeeId)
    {
        $employee = Employee::findOrFail($employeeId);

        if ($employee->image) {
            $oldImagePath = public_path($employee->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        // Delete the service
        $employee->delete();

        // Dispatch a success message
        $this->dispatch('success', ['message' => 'Employee has been deleted successfully!']);
    }


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $employees = Employee::query()
        ->when($this->search, function ($query) {
            $query->where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('post', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%')
                    ->orWhere('phone', 'like', '%' . $this->search . '%');
            });
        })
        ->latest()
        ->paginate(10);

        return view('livewire.admin.list-employee', ['employees' => $employees]);
    }
}
