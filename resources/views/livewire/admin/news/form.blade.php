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
                            <x-cancel-btn text="Back" route="{{ route('admin.news.index') }}" />
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
                                <label class="form-label" for="short_desc">Short Description</label>
                                <textarea type="text" class="form-control @error('short_desc') is-invalid @enderror" id="short_desc"
                                    wire:model="short_desc" placeholder="Enter Description"></textarea>
                                @error('short_desc')
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
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="tag">Tag</label>
                                <input type="text" class="form-control @error('tag') is-invalid @enderror"
                                    id="tag" wire:model="tag" placeholder="Enter Tag">
                                @error('tag')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="date">Date</label>
                                <input type="date" class="form-control @error('date') is-invalid @enderror"
                                    id="date" wire:model="date" placeholder="Enter Date">
                                @error('date')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
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
