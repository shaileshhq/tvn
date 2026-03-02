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
                                <x-add-btn text="New Role" route="{{route('admin.roles.create')}}"/>
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
                                    <th>Role Name</th>
                                    <th>Users</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($list as $key => $data)
                                    <tr>
                                        <td>{{ $list->firstItem() + $key }}</td>
                                        <td>
                                            <strong>{{ $data->name }}</strong>
                                            @if($data->name === 'Super Admin')
                                                <span class="badge bg-danger ms-1">Default</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge bg-primary">{{ $data->admins_count }} Admin(s)</span>
                                        </td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input type="checkbox" class="form-check-input status_update"
                                                    wire:click="updateStatus({{ $data->id }})" {{ $data->status == 1 ? 'checked' : '' }}
                                                    {{ $data->name === 'Super Admin' ? 'disabled' : '' }}>
                                            </div>
                                        </td>
                                        <td>
                                            <x-edit-btn route="{{route('admin.roles.edit', $data->id)}}"/>
                                            @if($data->name !== 'Super Admin')
                                                <button type="button" class="btn btn-icon btn-danger btn-xs mr-1" wire:click="delete({{$data->id}})" wire:confirm="Are you sure you want to delete this role?"><i class="bi bi-trash"></i></button>
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
