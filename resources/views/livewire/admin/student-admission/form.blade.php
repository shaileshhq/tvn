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
                            <x-cancel-btn text="Back" route="{{ route('admin.student-admission.index') }}" />
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{-- @if($errors->any())
                        {{ implode('', $errors->all('<div>:message</div>')) }}
                    @endif --}}
                    <form wire:submit.prevent="{{ $hidden_id ? 'update()' : 'save()' }}">
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="acdamic_id">Academic Year</label>
                                <select class="form-control @error('acdamic_id') is-invalid @enderror" id="acdamic_id" wire:model="acdamic_id">
                                    <option value="">Select Academic Year</option>
                                    @foreach ($academic_year_list as $year)
                                        <option value="{{$year->id}}">{{$year->year_name}}</option>
                                    @endforeach
                                </select>
                                @error('acdamic_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="class_id">Class</label>
                                <select class="form-control @error('class_id') is-invalid @enderror" id="class_id" wire:model="class_id">
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
                                <label class="form-label" for="transport">Transport</label>
                                <select class="form-control @error('transport') is-invalid @enderror"
                                id="transport" wire:model="transport">
                                    <option value="">Select Transport</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('transport')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="admission_no">Admission no.</label>
                                <input type="text" class="form-control @error('admission_no') is-invalid @enderror"
                                    id="admission_no" wire:model="admission_no" placeholder="Enter Admission no.">
                                @error('admission_no')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" wire:model="name" placeholder="Enter Name">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="gender">Gender</label>
                                <select class="form-control @error('gender') is-invalid @enderror"  id="gender" wire:model="gender">
                                    <option value="">--Select Gender--</option>
                                    <option value="female">Female</option>
                                    <option value="male">Male</option>
                                </select>
                                @error('gender')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="father_name">Father Name</label>
                                <input type="text" class="form-control @error('father_name') is-invalid @enderror"
                                    id="father_name" wire:model="father_name" placeholder="Enter father_name">
                                @error('father_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="mother_name">Mother Name</label>
                                <input type="text" class="form-control @error('mother_name') is-invalid @enderror"
                                    id="mother_name" wire:model="mother_name" placeholder="Enter Mother Name">
                                @error('mother_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="date_of_birth">Date of Birth</label>
                                <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" id="date_of_birth"
                                    wire:model="date_of_birth" placeholder="Enter date_of_birth">
                                @error('date_of_birth')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="adhaar_no">Adhaar no.</label>
                                <input type="text" class="form-control @error('adhaar_no') is-invalid @enderror" id="adhaar_no"
                                    wire:model="adhaar_no" placeholder="Enter Adhaar number">
                                @error('adhaar_no')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="contact">Contact</label>
                                <input type="number" class="form-control @error('contact') is-invalid @enderror" id="contact"
                                    wire:model="contact" placeholder="Enter Contact number">
                                @error('contact')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="address">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                                    wire:model="address" placeholder="Enter Address">
                                @error('address')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="admission_date">Admission Date</label>
                                <input type="date" class="form-control @error('admission_date') is-invalid @enderror" id="admission_date"
                                    wire:model="admission_date" placeholder="Enter admission date">
                                @error('admission_date')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    wire:model="email" placeholder="Enter Email">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="password">Password</label>
                                <input type="text" class="form-control @error('password') is-invalid @enderror" id="password"
                                    wire:model="password" placeholder="Enter Password">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="image">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    id="image" wire:model="image">
                                @if ($image)
                                    <img src="{{ $image->temporaryUrl() }}" width="100" height="100">
                                @elseif($show_image)
                                    <img src="{{asset('storage/'.$show_image) }}" width="100" height="100">
                                @else
                                    <img src="{{ asset('admin_css/no-photo.png') }}" alt="">
                                @endif
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
