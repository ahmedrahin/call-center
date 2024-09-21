<div>
    <form wire:submit.prevent="reply">
       

        @if(is_null($message->reply_message))
            <h6 style="padding-left: 0 !important;">Reply Message:</h6>
            <textarea name="reply_message" cols="20" rows="5" class="form-control @error('reply_message') error @enderror" wire:model="reply_message"></textarea>
            @error('reply_message')
                <span class="text-danger mt-1">{{ $message }}</span>
            @enderror

            <button class="btn btn-primary mt-3 d-block" style="border: none; border-radius: 0; width: 200px;">
                <span wire:loading.remove>Reply <i class="fa fa-reply-all" aria-hidden="true"></i></span>
                <span wire:loading>
                    <i class="fa fa-spinner fa-spin"></i> Loading...
                </span>
            </button>
        @else
            <h6 style="padding-left: 0 !important;">
                Reply Date: <span style="color: #313131;">{{ $message->updated_at->format('d-M-y h:i A') }}</span>
            </h6>
            <h6>Reply Your Message:</h6>
            <p style="color: #313131;">{{ $message->reply_message }}</p>
            <h6 class="time">{{ $message->updated_at->diffForHumans() }}</h6>
        @endif

        
    </form>
</div>
