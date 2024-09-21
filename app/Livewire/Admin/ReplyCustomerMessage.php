<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReplyMessage;
use Illuminate\Support\Facades\Validator;
use App\Models\ContactMessage;

class ReplyCustomerMessage extends Component
{   
    public $messageId;
    public $message;
    public $reply_message;
    public $customer_message;
    public $email;
    public $name;

    public function mount($messageId)
    {
        $this->messageId = $messageId;
        $this->message = ContactMessage::find($messageId);
    }

    protected $rules = [
        'reply_message' => 'required'
    ];

    public function reply()
    {
        $this->validate();

        $updatedMessage = ContactMessage::find($this->messageId);
        if ($updatedMessage) {
           
            $replyData = [
                'is_reply' => 1,
                'reply_message' => $this->reply_message,
                'message' => $updatedMessage->message,
                'name' => $updatedMessage->name
            ];

            // dd($replyData);

            $updatedMessage->update($replyData);
            $this->message = $updatedMessage;

            Mail::to($updatedMessage->email)->send(new ReplyMessage($replyData));
            
            $this->dispatch('success', ['message' => 'Your reply has been successfully sent in customer mail!']);
        }
    }


    public function render()
    {
        return view('livewire.admin.reply-customer-message');
    }
}
