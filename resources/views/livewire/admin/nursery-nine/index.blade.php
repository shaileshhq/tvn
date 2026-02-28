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
                                <form class="custom-search-bar me-3 mb-2 mb-md-0">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                                        <input type="text" class="form-control" placeholder="Search here...">
                                    </div>
                                </form>
                                <x-add-btn text="New" route="{{route('admin.nursery-to-nine.create')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Signature</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Father Name</th>
                                    <th>Father Occupation</th>
                                    <th>Last School</th>
                                    <th>CBSC Affilated</th>
                                    <th>Subject</th>
                                    <th>TC Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($list as $data)
                                    <tr>
                                        <td>
                                            <img src="{{asset('storage/'.$data->image) }}" alt="">
                                        </td>
                                        <td>{{ $data->signature}}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->getClass ? $data->getClass->class_name : '--' }}</td>
                                        <td>{{ $data->father_name }}</td>
                                        <td>{{ $data->father_occupation }}</td>
                                        <td>{{ $data->last_school }}</td>
                                        <td>{{ $data->cbsc_affilated }}</td>
                                        <td>{{ $data->subject }}</td>
                                        <td>{{ $data->tc_date }}</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input type="checkbox" class="form-check-input status_update"
                                                    wire:click="updateStatus({{ $data->id }})" {{ $data->status == 1 ? 'checked' : '' }}>
                                            </div>
                                        </td>
                                        <td>
                                            <x-edit-btn route="{{route('admin.nursery-to-nine.edit', $data->id)}}"/>
                                            {{-- <button type="button" class="btn btn-icon btn-danger btn-xs mr-1" wire:click="delete({{$data->id}})"><i class="bi bi-trash"></i></button> --}}
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
