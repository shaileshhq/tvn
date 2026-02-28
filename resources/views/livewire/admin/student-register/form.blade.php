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
                            <x-cancel-btn text="Back" route="{{route('admin.student-register.index')}}"/>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="{{ $hidden_id ? 'update()' : 'save()' }}">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="addmission_no">Addmission No.</label>
                                <input type="text" class="form-control @error('addmission_no') is-invalid @enderror"
                                    id="addmission_no" wire:model="addmission_no" placeholder="Enter Addmission No.">
                                @error('addmission_no')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" wire:model="name" placeholder="Enter Name">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" wire:model="email" placeholder="Enter Email">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="contact">Contact</label>
                                <input type="number" class="form-control @error('contact') is-invalid @enderror"
                                    id="contact" wire:model="contact" placeholder="Enter Contact">
                                @error('contact')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="address">Address</label>
                                <textarea type="text" class="form-control @error('address') is-invalid @enderror"
                                    id="address" wire:model="address" placeholder="Enter Address"></textarea>
                                @error('address')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="verified">Verify</label>
                                <select class="form-control" id="verified" wire:model="verified">
                                    <option>--select verify--</option>
                                    <option value="0">Ban</option>
                                    <option value="1">Verify</option>
                                </select>
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

