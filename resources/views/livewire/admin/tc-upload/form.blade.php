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
                            <x-cancel-btn text="Back" route="{{ route('admin.tc-upload.index') }}" />
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="{{ $hidden_id ? 'update()' : 'save()' }}">
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="admission_no">Admission No.</label>
                                <input type="text" class="form-control @error('admission_no') is-invalid @enderror"
                                    id="admission_no" wire:model="admission_no" placeholder="Enter Admission No.">
                                @error('admission_no')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="tc_no">TC No. <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('tc_no') is-invalid @enderror"
                                    id="tc_no" wire:model="tc_no" placeholder="Enter TC No.">
                                @error('tc_no')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="file">TC File (PDF/Image) <span class="text-danger">*</span></label>
                                <input type="file" class="form-control @error('file') is-invalid @enderror"
                                    id="file" wire:model="file">
                                @error('file')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                @if(isset($show_file) && $show_file)
                                    <div class="mt-2">
                                        <a href="{{ asset('storage/' . $show_file) }}" target="_blank" class="text-primary">View Current File</a>
                                    </div>
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
