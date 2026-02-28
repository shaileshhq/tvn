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
                            <x-cancel-btn text="Back" route="{{ route('admin.admission-eleven.index') }}" />
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="{{ $hidden_id ? 'update()' : 'save()' }}">
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" wire:model="name" placeholder="Enter Name">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="class">Class</label>
                                <input type="text" class="form-control @error('class') is-invalid @enderror"
                                    id="class" wire:model="class" placeholder="Enter Class">
                                @error('class')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="date_of_birth">Date of Birth</label>
                                <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                                    id="date_of_birth" wire:model="date_of_birth" placeholder="Enter date of birth">
                                @error('date_of_birth')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="caste">Caste</label>
                                <input type="text" class="form-control @error('caste') is-invalid @enderror"
                                    id="caste" wire:model="caste" placeholder="Enter Caste">
                                @error('caste')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="father_name">Father Name</label>
                                <input type="text" class="form-control @error('father_name') is-invalid @enderror"
                                    id="father_name" wire:model="father_name" placeholder="Enter Father Name">
                                @error('father_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="father_occupation">Father Occupation</label>
                                <input type="text" class="form-control @error('father_occupation') is-invalid @enderror"
                                    id="father_occupation" wire:model="father_occupation" placeholder="Enter Father occupation">
                                @error('father_occupation')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="roll_no">Roll No.</label>
                                <input type="text" class="form-control @error('roll_no') is-invalid @enderror"
                                    id="roll_no" wire:model="roll_no" placeholder="Enter Roll number">
                                @error('roll_no')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="stream">Stream</label>
                                <input type="text" class="form-control @error('stream') is-invalid @enderror"
                                    id="stream" wire:model="stream" placeholder="Enter stream">
                                @error('stream')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="date_of_admission">Date of Admission</label>
                                <input type="date" class="form-control @error('date_of_admission') is-invalid @enderror"
                                    id="date_of_admission" wire:model="date_of_admission" placeholder="Enter date of admission">
                                @error('date_of_admission')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="tc_date">TC Date</label>
                                <input type="date" class="form-control @error('tc_date') is-invalid @enderror"
                                    id="tc_date" wire:model="tc_date" placeholder="Enter tc date">
                                @error('tc_date')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="certificate">Certificate</label>
                                <input type="text" class="form-control @error('certificate') is-invalid @enderror"
                                    id="certificate" wire:model="certificate" placeholder="Enter Certificate">
                                @error('certificate')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="signature">Signature</label>
                                <input type="file" class="form-control @error('signature') is-invalid @enderror"
                                    id="signature" wire:model="signature" placeholder="Enter signature">
                                @error('signature')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="image">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    id="image" wire:model="image">
                                @if ($image)
                                    <img src="{{ $image->temporaryUrl() }}" width="250" height="300">
                                @elseif($show_image)
                                    <img src="{{asset('storage/'.$show_image) }}" width="250" height="300">
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
