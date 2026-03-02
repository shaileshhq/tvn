<div>
    @section('title', config('app.name') . ' | '.$page_title)
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6 card-title">
                            <h4>{{ $page_title }}</h4>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-end">
                                <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary btn-sm" wire:navigate>
                                    <i class="bi bi-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="save">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-bold">Role Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" wire:model="name" placeholder="Enter role name">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <h5 class="mb-3">
                                    <i class="bi bi-shield-check"></i> Page Permissions
                                    <small class="text-muted">(Select pages this role can access)</small>
                                </h5>
                                @error('selectedPages')
                                    <div class="alert alert-danger py-2">{{ $message }}</div>
                                @enderror

                                <div class="mb-3">
                                    <button type="button" class="btn btn-sm btn-outline-primary me-2" wire:click="selectAll">
                                        <i class="bi bi-check-all"></i> Select All
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" wire:click="deselectAll">
                                        <i class="bi bi-x-circle"></i> Deselect All
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            @foreach($availablePages as $slug => $label)
                                <div class="col-md-4 col-lg-3 mb-3">
                                    <div class="card h-100 {{ is_array($selectedPages) && in_array($slug, $selectedPages) ? 'border-primary' : 'border' }}" style="cursor:pointer;" wire:click="togglePage('{{ $slug }}')">
                                        <div class="card-body py-2 px-3 d-flex align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{ $slug }}"
                                                    wire:model.live="selectedPages"
                                                    id="page_{{ $slug }}">
                                                <label class="form-check-label fw-semibold" for="page_{{ $slug }}" style="cursor:pointer;">
                                                    {{ $label }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-lg"></i> Save Role
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
