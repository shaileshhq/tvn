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
                            <x-cancel-btn text="Back" route="{{ route('admin.document.index') }}" />
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
                                <label class="form-label" for="category">Category</label>
                                <select class="form-select @error('category') is-invalid @enderror" id="category" wire:model="category">
                                    <option value="documents">DOCUMENTS AND INFORMATION</option>
                                    <option value="result_academics">RESULT AND ACADEMICS</option>
                                </select>
                                @error('category')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="document">Document</label>
                                <input type="file" class="form-control @error('document') is-invalid @enderror"
                                    id="document" wire:model="document">
                                {{-- @if ($document)
                                    <img src="{{ $document->temporaryUrl() }}" width="250" height="300">
                                @elseif($document)
                                    <img src="{{asset('storage/'.$document) }}" width="250" height="300">
                                @else
                                    <img src="{{ asset('admin_css/no-photo.png') }}" alt="">
                                @endif --}}
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
