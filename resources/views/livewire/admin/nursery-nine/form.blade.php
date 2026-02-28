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
                            <x-cancel-btn text="Back" route="{{ route('admin.nursery-to-nine.index') }}" />
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
                                    id="father_occupation" wire:model="father_occupation" placeholder="Enter Father Occupation">
                                @error('father_occupation')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="last_school">Last School</label>
                                <input type="text" class="form-control @error('last_school') is-invalid @enderror"
                                    id="last_school" wire:model="last_school" placeholder="Enter Last School">
                                @error('last_school')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="cbsc_affilated">CBSC Affilated</label>
                                <input type="text" class="form-control @error('cbsc_affilated') is-invalid @enderror"
                                    id="cbsc_affilated" wire:model="cbsc_affilated" placeholder="Enter cbsc Affilated">
                                @error('cbsc_affilated')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="subject">Subject</label>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                    id="subject" wire:model="subject" placeholder="Enter Subject">
                                @error('subject')
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
                                <label class="form-label" for="signature">Signature</label>
                                <input type="file" class="form-control @error('signature') is-invalid @enderror"
                                    id="signature" wire:model="signature" placeholder="Enter Signature">
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
