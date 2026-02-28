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
                            <x-cancel-btn text="Back" route="{{ route('admin.school-time.index') }}" />
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="{{ $hidden_id ? 'update()' : 'save()' }}">
                        <div class="row mb-3">
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="title">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" wire:model="title" placeholder="Enter Title">
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="description">Description</label>
                                <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                                    wire:model="description" placeholder="Enter Description"></textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="open">Open Time</label>
                                <input type="time" class="form-control @error('open') is-invalid @enderror"
                                    id="open" wire:model="open" placeholder="Enter Open Time">
                                @error('open')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="close">Close Time</label>
                                <input type="time" class="form-control @error('close') is-invalid @enderror"
                                    id="close" wire:model="close" placeholder="Enter Close Time">
                                @error('close')
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
