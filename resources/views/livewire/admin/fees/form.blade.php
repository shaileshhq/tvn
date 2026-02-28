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
                            <x-cancel-btn text="Back" route="{{route('admin.fees.index')}}"/>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="{{ $hidden_id ? 'update()' : 'save()' }}">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label" for="fee_name">Fees Name</label>
                                <input type="text" class="form-control @error('fee_name') is-invalid @enderror"
                                    id="fee_name" wire:model="fee_name" placeholder="Enter Fees Name">
                                @error('fee_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="ammount">Ammount</label>
                                <input type="text" class="form-control @error('ammount') is-invalid @enderror"
                                    id="ammount" wire:model="ammount" placeholder="Enter Ammount">
                                @error('ammount')
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

