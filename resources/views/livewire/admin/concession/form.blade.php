<div>
    @section('title', config('app.name') . ' | ' . $page_title)
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6 card-title">
                            <h4>{{ $page_title }}</h4>
                        </div>
                        <div class="col-6 text-end">
                            <x-cancel-btn text="Back" route="{{route('admin.class.index')}}"/>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="{{ $hidden_id ? 'update()' : 'save()' }}">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="academic_year_id">Academic Year</label>
                                <select class="form-control @error('academic_year_id') is-invalid @enderror" id="academic_year_id" wire:model="academic_year_id">
                                    <option value="">Select Academic Year</option>
                                    @foreach ($academic_year as $year)
                                        <option value="{{$year->id}}">{{$year->year_name}}</option>
                                    @endforeach
                                </select>
                                @error('academic_year_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="fee_id">Fees</label>
                                <select class="form-control @error('fee_id') is-invalid @enderror" id="fee_id" wire:model="fee_id">
                                    <option value="">Select Fees</option>
                                    @foreach ($fees_list as $fee)
                                        <option value="{{$fee->id}}">{{$fee->fee_name}}</option>
                                    @endforeach
                                </select>
                                @error('fee_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="class_id">Class</label>
                                <select class="form-control @error('class_id') is-invalid @enderror" id="class_id" wire:model.live="class_id">
                                    <option value="">Select Class</option>
                                    @foreach ($class_list as $class)
                                        <option value="{{$class->id}}">{{$class->class_name}}</option>
                                    @endforeach
                                </select>
                                @error('class_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="student_admission_id">Student</label>
                                <select class="form-control @error('student_admission_id') is-invalid @enderror" id="student_admission_id" wire:model="student_admission_id">
                                    <option value="">Select Student</option>
                                    @foreach ($student_list as $student)
                                        <option value="{{$student->id}}">{{$student->name}}</option>
                                    @endforeach
                                </select>
                                @error('student_admission_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="concession">Concession</label>
                                <input type="text" class="form-control @error('concession') is-invalid @enderror"
                                    id="concession" wire:model="concession" placeholder="Enter concession ammount">
                                @error('concession')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <x-save-btn text="{{ $hidden_id ? 'Update' : 'Save' }}" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

