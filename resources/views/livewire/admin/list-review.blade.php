<div wire:poll.visible>
    <div class="card">
        <div class="card-header" style="border-bottom: 0">
            <form class="form-inline search-form search-box">
                <div class="form-group">
                    <input class="form-control-plaintext" name="search" type="search" placeholder="Search.." wire:model="search">
                </div>
            </form>
            <a href="{{route('admin.addreview')}}" class="btn btn-primary add-row mt-md-0 mt-2" wire:navigate>Add Review
            </a>
        </div>

        <div class="card-body pt-0">
            <div class="table-responsive table-desi">
                @if($reviews->isNotEmpty())
                    <table class="all-package coupon-table table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Messge</th>
                                <th>Date</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reviews as $review)
                                <tr>
                                    <td>
                                        <img src="{{asset($review->image)}}" alt="">
                                    </td>
                                    <td>{{ $review->name }}</td>
                                   <td>
                                    {{ \Illuminate\Support\Str::limit($review->message, 50, '...') }}
                                   </td>

                                    <td>
                                        {{ $review->created_at->diffForHumans() }}
                                    </td>
                                    <td class="btn-action">
                                        <a href="javascript:void(0)" wire:click="performDeletion({{ $review->id }})">
                                            <i class="fa fa-trash" title="Delete"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $reviews->links() }}
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
