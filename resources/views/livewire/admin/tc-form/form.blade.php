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
                            <x-cancel-btn text="Back" route="{{route('admin.tc-form.index')}}"/>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="{{ $hidden_id ? 'update()' : 'save()' }}">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" wire:model="name" placeholder="Enter Name">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="father_name">Father Name</label>
                                <input type="text" class="form-control @error('father_name') is-invalid @enderror"
                                    id="father_name" wire:model="father_name" placeholder="Enter Father Name">
                                @error('father_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="caste">Caste</label>
                                <select class="form-control @error('caste') is-invalid @enderror" id="caste" wire:model="caste">
                                    <option value="">Select Caste</option>
                                    <option value="General">General</option>
                                    <option value="OBC">OBC</option>
                                    <option value="ST/SC">ST/SC</option>
                                    <option value="Other">Other</option>
                                </select>
                                @error('caste')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="date_of_birth">Date of Birth</label>
                                <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                                    id="date_of_birth" wire:model="date_of_birth" placeholder="Enter date">
                                @error('date_of_birth')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="result">Result</label>
                                <input type="text" class="form-control @error('result') is-invalid @enderror"
                                    id="result" wire:model="result" placeholder="Enter Result">
                                @error('result')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="qualified">Qualified Class</label>
                                <input type="text" class="form-control @error('qualified') is-invalid @enderror"
                                    id="qualified" wire:model="qualified" placeholder="Enter Qualified">
                                @error('qualified')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="full_ammount">Paid All Amount</label>
                                <input type="text" class="form-control @error('full_ammount') is-invalid @enderror"
                                    id="full_ammount" wire:model="full_ammount" placeholder="Enter Full Ammount">
                                @error('full_ammount')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="issue_date">Issue Date</label>
                                <input type="date" class="form-control @error('issue_date') is-invalid @enderror"
                                    id="issue_date" wire:model="issue_date" placeholder="Enter Issue Date">
                                @error('issue_date')
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

