<div wire:poll.visible>
    <div class="card">
        <div class="card-header" style="border-bottom: 0">
            <form class="form-inline search-form search-box">
                <div class="form-group">
                    <input class="form-control-plaintext" name="search" type="search" placeholder="Search.." wire:model="search">
                </div>
            </form>
            <a href="{{route('admin.addemployee')}}" class="btn btn-primary add-row mt-md-0 mt-2" wire:navigate>Add
            Employee</a>
        </div>

        <div class="card-body pt-0">
            <div class="table-responsive table-desi">
                @if($employees->isNotEmpty())
                    <table class="all-package coupon-table table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Post</th>
                                <th>Phone</th>
                                <th>Join Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <td>
                                        <img src="{{asset($employee->image)}}" alt="">
                                    </td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->post }}</td>
                                    <td>{{ $employee->phone ?? '-' }}</td>
                                    <td>
                                        {{ $employee->created_at->format('d-M-y') }}
                                    </td>
                                    <td class="btn-action">
                                        <a href="{{ route('admin.editemployee', $employee->id) }}" wire:navigate>
                                            <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                        </a>
                                        <a href="javascript:void(0)" wire:click="performDeletion({{ $employee->id }})">
                                            <i class="fa fa-trash" title="Delete"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $employees->links() }}
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
