<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactMessage; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactData extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string|max:1000|min:10',
    ];

    // Real-time validation when the user types
    public function updated($propertyName)
    {
        // Clear the error for the current field
        $this->resetErrorBag($propertyName);

        // Validate only the current field
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

         // Save the contact message to the database
         $contact = ContactMessage::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        $this->reset(['name', 'email', 'message']);
        $this->dispatch('contactSaved');

        // Send the email
        Mail::to('ahmedrahin660@gmail.com')->send(new ContactFormMail($contact));
    }

    public function render()
    {
        return view('livewire.contact-data');
    }
}
