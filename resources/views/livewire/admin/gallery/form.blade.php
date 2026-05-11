<div>
    @section('title', config('app.name') . ' | ' . $page_title)
    
    <style>
        .upload-zone {
            border: 2px dashed #667eea;
            border-radius: 15px;
            padding: 40px 20px;
            text-align: center;
            background: #f8faff;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .upload-zone:hover {
            background: #f0f4ff;
            border-color: #764ba2;
        }
        .upload-zone i {
            font-size: 50px;
            color: #667eea;
            margin-bottom: 15px;
            display: block;
        }
        .upload-zone input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }
        .preview-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }
        .preview-item {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            height: 120px;
        }
        .preview-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .upload-text h5 {
            font-weight: 600;
            color: #444;
            margin-bottom: 5px;
        }
        .upload-text p {
            font-size: 13px;
            color: #777;
        }
    </style>

    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6 card-title">
                            <h4>{{ $page_title }}</h4>
                        </div>
                        <div class="col-6 text-end">
                            <x-cancel-btn text="Back" route="{{ route('admin.gallery.index') }}" />
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="{{ $hidden_id ? 'update()' : 'save()' }}">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label class="form-label" for="academic_year">Academic Session <span class="text-danger">*</span></label>
                               <select class="form-control @error('academic_year') is-invalid @enderror" id="academic_year" wire:model="academic_year">
                                <option value="">Select Academic Session</option>
                                @foreach ($academic_years as $year)
                                    <option value="{{$year->id}}">{{$year->year_name}}</option>
                                @endforeach
                               </select>
                                @error('academic_year')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        @if(!$hidden_id)
                        <div class="row mb-3">
                            <div class="col-12">
                                <label class="form-label mb-2" style="font-weight:600;">Upload Gallery Images</label>
                                
                                <div class="upload-zone" 
                                     x-data="{ isDropping: false }" 
                                     x-on:dragover.prevent="isDropping = true" 
                                     x-on:dragleave.prevent="isDropping = false" 
                                     x-on:drop.prevent="isDropping = false"
                                     :style="isDropping ? 'background: #eef2ff; border-color: #764ba2;' : ''">
                                    
                                    <i class="mdi mdi-cloud-upload"></i>
                                    <div class="upload-text">
                                        <h5>Drag and drop images here</h5>
                                        <p>or click to browse from your computer</p>
                                        <small class="text-muted">(Supports: JPEG, JPG, PNG | Max: 5MB per image)</small>
                                    </div>
                                    
                                    <input type="file" wire:model="images" multiple accept="image/jpeg,image/jpg,image/png">
                                    
                                    <div wire:loading wire:target="images" class="mt-2">
                                        <div class="spinner-border spinner-border-sm text-primary" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                        <span class="ms-1" style="font-size:13px;">Uploading previews...</span>
                                    </div>
                                </div>

                                @error('images')
                                    <div class="mt-2"><small class="text-danger">{{ $message }}</small></div>
                                @enderror
                                @error('images.*')
                                    <div class="mt-1"><small class="text-danger">{{ $message }}</small></div>
                                @enderror

                                {{-- Previews --}}
                                @if($images)
                                <div class="preview-grid">
                                    @foreach($images as $index => $img)
                                        <div class="preview-item">
                                            <img src="{{ $img->temporaryUrl() }}">
                                            <div style="position:absolute; bottom:0; left:0; right:0; background:rgba(0,0,0,0.5); color:#fff; font-size:10px; padding:2px 5px; text-align:center;">
                                                Image {{ $index + 1 }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                        @else
                        {{-- Edit mode: Single Image --}}
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="image">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    id="image" wire:model="image">
                                <div class="mt-3">
                                    @if ($image)
                                        <img src="{{ $image->temporaryUrl() }}" style="max-width:250px; border-radius:10px; box-shadow:0 4px 10px rgba(0,0,0,0.1);">
                                    @elseif($show_image)
                                        <img src="{{asset('storage/'.$show_image) }}" style="max-width:250px; border-radius:10px; box-shadow:0 4px 10px rgba(0,0,0,0.1);">
                                    @else
                                        <img src="{{ asset('admin_css/no-photo.png') }}" alt="" style="max-width:250px;">
                                    @endif
                                </div>
                                @error('image')
                                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        @endif

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <x-save-btn text="{{ $hidden_id ? 'Update Gallery' : 'Upload All Images' }}" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
