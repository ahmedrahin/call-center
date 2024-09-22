<div>
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
                @if($services->isNotEmpty())
                    <table class="all-package coupon-table table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Short Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                                <tr>
                                    <td>
                                        <img src="{{asset($service->image)}}" alt="">
                                    </td>
                                    <td>{{ $service->title }}</td>
                                    <td>{{ $service->short_title }}</td>

                                    <td class="btn-action">
                                        <a href="{{ route('admin.editservice', $service->id) }}" wire:navigate>
                                            <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                        </a>
                                        <a href="javascript:void(0)" wire:click="confirmDeletion({{ $service->id }})">
                                            <i class="fa fa-trash" title="Delete"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $services->links() }}
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
<script>
   Livewire.on('confirm', (params) => {
    Swal.fire({
        title: params.title || 'Are you sure?',
        text: params.text || 'You won\'t be able to revert this!',
        icon: params.icon || 'warning',
        showCancelButton: true,
        confirmButtonText: params.confirmButtonText || 'Yes, delete it!',
        cancelButtonText: params.cancelButtonText || 'Cancel',
    }).then((result) => {
        if (result.isConfirmed) {
            // Correct usage in Livewire 3
            Livewire.dispatch(params.onConfirmed, { serviceId: params.serviceId });
        } else if (params.onCancelled) {
            Livewire.dispatch(params.onCancelled);
        }
    });
});


</script>

@endsection