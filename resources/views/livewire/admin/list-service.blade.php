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
                                <th>Title</th>
                                <th>Short Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                                <tr>
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
       Livewire.on('confirm', (event) => {
    Swal.fire({
        title: event.title,
        text: event.text,
        icon: event.icon,
        showCancelButton: true,
        confirmButtonText: event.confirmButtonText,
        cancelButtonText: event.cancelButtonText,
    }).then((result) => {
        if (result.isConfirmed) {
            Livewire.dispatch(event.onConfirmed, event.to); // Pass the service ID
        } else if (event.onCancelled) {
            Livewire.dispatch(event.onCancelled);
        }
    });
});

    </script>
@endsection