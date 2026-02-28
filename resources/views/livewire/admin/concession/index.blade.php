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
                                <x-add-btn text="New" route="{{route('admin.concession.create')}}"/>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Student</th>
                                    <th>Academic Year</th>
                                    <th>Class</th>
                                    <th>Fees</th>
                                    <th>Concession</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($list as $data)
                                    <tr>
                                        <td>{{ $data->getStudentAdmission->admission_no }}</td>
                                        <td>{{ $data->getAcademicYear->year_name }}</td>
                                        <td>{{ $data->getClassMaster->class_name }}</td>
                                        <td>{{ $data->getFees->fee_name }}</td>
                                        <td>{{ $data->concession }}</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input type="checkbox" class="form-check-input status_update"
                                                    wire:click="updateStatus({{ $data->id }})" {{ $data->status == 1 ? 'checked' : '' }}>
                                            </div>
                                        </td>
                                        <td>
                                            <x-edit-btn route="{{route('admin.concession.edit', $data->id)}}"/>
                                            {{-- <button type="button" class="btn btn-icon btn-danger btn-xs mr-1" wire:click="delete({{$data->id}})"><i class="bi bi-trash"></i></button> --}}
                                        </td>
                                    </tr>
                                @empty
                                    <x-table-no-data />
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
