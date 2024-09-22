<div wire:poll.visible>

    <div class="card">
        <div class="card-header" style="border-bottom: 0">
            <form class="form-inline search-form search-box">
                <div class="form-group">
                    <input class="form-control-plaintext" name="search" type="search" placeholder="Search.." wire:model="search">
                </div>
                
            </form>

    
        </div>

        <div class="card-body pt-0">
            <div class="table-responsive table-desi">
                @if($messages->isNotEmpty())
                    <table class="all-package coupon-table table">
                        <thead>
                            <tr>
                                <th>
                                    <button type="button" class="btn btn-primary add-row delete_all" wire:click="deleteSelected" style="font-size: 12px;">Delete Selected</button>
                                </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Replied</th>
                                <th>Time</th>
                                <th>Reply</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($messages as $message)
                                <tr>
                                    <td>
                                        <input type="checkbox" class="checkbox_animated check-it" wire:model="selectedMessages" value="{{ $message->id }}">
                                    </td>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>
                                        @if($message->is_reply == 0)
                                            <span class="order-cancle">No</span>
                                        @else
                                            <span class="order-success">Yes</span>
                                        @endif
                                    </td>
                                    <td>{{ $message->created_at->diffForHumans() }}</td>
                                    <td class="btn-action">
                                        <a href="{{ route('admin.replymessage', $message->id) }}" wire:navigate>
                                            <i class="fa fa-reply-all" aria-hidden="true"></i>
                                        </a>
                                       
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $messages->links() }}
                    </div>
                @else
                    <span class="text-center text-danger d-block" style="font-size: 18px; font-weight: 600; font-style: italic;">
                        No data found!
                    </span>
                @endif
            </div>
        </div>
    </div>
</div>

@section('script')
   
@endsection