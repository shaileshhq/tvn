<div>
    @section('title', config('app.name') . ' | '.$page_title)
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6 card-title">
                            <h4>{{ $page_title }}</h4>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-end flex-wrap text-nowrap">
                                <x-add-btn text="New Admin" route="{{route('admin.admin-users.create')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($list as $key => $data)
                                    <tr>
                                        <td>{{ $list->firstItem() + $key }}</td>
                                        <td>
                                            <strong>{{ $data->name }}</strong>
                                            @if($data->id === auth()->guard('admin')->id())
                                                <span class="badge bg-info ms-1">You</span>
                                            @endif
                                        </td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->phone ?? '-' }}</td>
                                        <td>
                                            @if($data->role)
                                                <span class="badge bg-{{ $data->role->name === 'Super Admin' ? 'danger' : 'primary' }}">{{ $data->role->name }}</span>
                                            @else
                                                <span class="badge bg-secondary">No Role</span>
                                            @endif
                                        </td>
                                        <td>
                                            <x-edit-btn route="{{route('admin.admin-users.edit', $data->id)}}"/>
                                            @if($data->id !== auth()->guard('admin')->id())
                                                <button type="button" class="btn btn-icon btn-danger btn-xs mr-1" wire:click="delete({{$data->id}})" wire:confirm="Are you sure you want to delete this admin?"><i class="bi bi-trash"></i></button>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <x-table-no-data />
                                @endforelse
                            </tbody>
                        </table>
                        {{ $list->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
