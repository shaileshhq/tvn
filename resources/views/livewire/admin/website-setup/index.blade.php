<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <h4>{{ $page_title }}</h4>
                            </div>
                        </div>
                    </h6>
                </div>
                <div class="card-body">
                    <form id="valid_form" wire:submit="save()">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="logo" class="form-label">Logo</label>
                                <input id="logo" class="form-control" type="file" name="logo"
                                    wire:model="logo" accept="image/*">
                                <input type="hidden" name="type[]" value="logo">
                                <img src="{{ asset('storage/website_setup/' . websiteSetupValue('logo')) }}"
                                    alt="Logo" height="80" width="80"
                                    onerror="this.onerror=null; this.src='{{ asset('admin_css/no-photo.png') }}'">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="favicon" class="form-label">Favicon</label>
                                <input id="favicon" class="form-control" type="file" name="favicon"
                                    wire:model="favicon" accept="image/*">
                                <input type="hidden" name="type[]" value="favicon">
                                <img src="{{ asset('storage/website_setup/' . websiteSetupValue('favicon')) }}"
                                    class="mt-2" alt="Favicon" height="80" width="80"
                                    onerror="this.onerror=null; this.src='{{ asset('admin_css/no-photo.png') }}'">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="contact_number" class="form-label">Contact Number</label>
                                <input id="contact_number" class="form-control" type="number" name="contact_number"
                                    wire:model="contact_number" placeholder="Enter Contact Number"
                                    value="{{ websiteSetupValue('contact_number') }}">
                                <input type="hidden" name="type[]" wire:model="type" value="contact_number">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="whats_app_number" class="form-label">WhatsApp Number</label>
                                <input id="whats_app_number" class="form-control" type="number" name="whats_app_number"
                                    wire:model="whats_app_number" placeholder="Enter Contact Number"
                                    value="{{ websiteSetupValue('whats_app_number') }}">
                                <input type="hidden" name="type[]" value="whats_app_number">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" class="form-control" type="email" name="email"
                                    wire:model="email" placeholder="Enter Email"
                                    value="{{ websiteSetupValue('email') }}">
                                <input type="hidden" name="type[]" value="email">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea name="address" class="form-control" id="address" wire:model="address" rows="2"
                                    placeholder="Enter Full Address">{{ websiteSetupValue('address') }}</textarea>
                                <input type="hidden" name="type[]" value="address">
                            </div>
                            <hr>
                            <div class="col-md-12 mb-3">
                                <label for="principal_content" class="form-label">Principal Content</label>
                                <textarea name="principal_content" wire:model="principal_content" class="form-control" id="principal_content"
                                    rows="4" placeholder="Enter Content">{{ websiteSetupValue('principal_content') }}</textarea>
                                <input type="hidden" name="type[]" value="principal_content"
                                    wire:model="principal_content">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="principal_name" class="form-label">Principal Name</label>
                                <input id="principal_name" class="form-control" type="text" name="principal_name"
                                    wire:model="principal_name" placeholder="Enter Name"
                                    value="{{ websiteSetupValue('principal_name') }}">
                                <input type="hidden" name="type[]" wire:model="type" value="principal_name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="principal_image" class="form-label">Principal Image</label>
                                <input id="principal_image" class="form-control" type="file" name="principal_image"
                                    wire:model="principal_image" accept="image/*">
                                <input type="hidden" name="type[]" value="principal_image">
                                <img src="{{ asset('storage/website_setup/' . websiteSetupValue('principal_image')) }}"
                                    alt="modal image" height="80" width="80"
                                    onerror="this.onerror=null; this.src='{{ asset('admin_css/no-photo.png') }}'">
                            </div>
                            <hr>
                            <div class="col-md-12 mb-3">
                                <label for="director_content" class="form-label">Director Content</label>
                                <textarea name="director_content" wire:model="director_content" class="form-control" id="director_content"
                                    rows="4" placeholder="Enter Content">{{ websiteSetupValue('director_content') }}</textarea>
                                <input type="hidden" name="type[]" value="director_content"
                                    wire:model="director_content">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="director_name" class="form-label">Director Name</label>
                                <input id="director_name" class="form-control" type="text" name="director_name"
                                    wire:model="director_name" placeholder="Enter Name"
                                    value="{{ websiteSetupValue('director_name') }}">
                                <input type="hidden" name="type[]" wire:model="type" value="director_name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="director_image" class="form-label">Director Image</label>
                                <input id="director_image" class="form-control" type="file" name="director_image"
                                    wire:model="director_image" accept="image/*">
                                <input type="hidden" name="type[]" value="director_image">
                                <img src="{{ asset('storage/website_setup/' . websiteSetupValue('director_image')) }}"
                                    alt="modal image" height="80" width="80"
                                    onerror="this.onerror=null; this.src='{{ asset('admin_css/no-photo.png') }}'">
                            </div>
                            <hr>
                            <div class="col-md-6 mb-3">
                                <label for="modal_image" class="form-label">Modal Image</label>
                                <input id="modal_image" class="form-control" type="file" name="modal_image"
                                    wire:model="modal_image" accept="image/*">
                                <input type="hidden" name="type[]" value="modal_image">
                                <img src="{{ asset('storage/website_setup/' . websiteSetupValue('modal_image')) }}"
                                    alt="modal image" height="80" width="80"
                                    onerror="this.onerror=null; this.src='{{ asset('admin_css/no-photo.png') }}'">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="modal_text" class="form-label">Text</label>
                                <input id="modal_text" class="form-control" type="text" name="modal_text"
                                    wire:model="modal_text" placeholder="Enter Text"
                                    value="{{ websiteSetupValue('modal_text') }}">
                                <input type="hidden" name="type[]" wire:model="type" value="modal_text">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="modal_url" class="form-label">URL</label>
                                <input id="modal_url" class="form-control" type="text" name="modal_url"
                                    wire:model="modal_url" placeholder="Enter URL"
                                    value="{{ websiteSetupValue('modal_url') }}">
                                <input type="hidden" name="type[]" wire:model="type" value="modal_url">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="end_date" class="form-label">End Date</label>
                                <input id="end_date" class="form-control" type="date" name="end_date"
                                    wire:model="end_date" placeholder="Enter Date"
                                    value="{{ websiteSetupValue('end_date') }}">
                                <input type="hidden" name="type[]" wire:model="type" value="end_date">
                            </div>
                            <hr>
                            <div class="col-md-4 mb-3">
                                <div class="input-group flatpickr">
                                    <span class="input-group-text input-group-addon bg-primary" data-toggle><i
                                            class="text-white" data-feather="facebook"></i></span>
                                    <input type="text" name="facebook" wire:model="facebook" class="form-control"
                                        placeholder="Enter Facebook Link" value="{{ websiteSetupValue('facebook') }}"
                                        data-input>
                                    <input type="hidden" name="type[]" value="facebook">
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="input-group flatpickr">
                                    <span class="input-group-text input-group-addon bg-info" data-toggle><i
                                            class="text-white" data-feather="twitter"></i></span>
                                    <input type="text" name="twitter" wire:model="twitter" class="form-control"
                                        placeholder="Enter Twitter Link" value="{{ websiteSetupValue('twitter') }}"
                                        data-input>
                                    <input type="hidden" name="type[]" value="twitter">
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="input-group flatpickr">
                                    <span class="input-group-text input-group-addon bg-danger" data-toggle><i
                                            class="text-white" data-feather="instagram"></i></span>
                                    <input type="text" name="instagram" wire:model="instagram"
                                        class="form-control" placeholder="Enter Instagram Link"
                                        value="{{ websiteSetupValue('instagram') }}" data-input>
                                    <input type="hidden" name="type[]" value="instagram">
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="input-group flatpickr">
                                    <span class="input-group-text input-group-addon bg-danger" data-toggle><i
                                            class="text-white" data-feather="youtube"></i></span>
                                    <input type="text" name="youtube" wire:model="youtube" class="form-control"
                                        placeholder="Enter Youtube Link" value="{{ websiteSetupValue('youtube') }}"
                                        data-input>
                                    <input type="hidden" name="type[]" value="youtube">
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="input-group flatpickr">
                                    <span class="input-group-text input-group-addon bg-primary" data-toggle><i
                                            class="text-white" data-feather="linkedin"></i></span>
                                    <input type="text" name="linkedin" wire:model="linkedin" class="form-control"
                                        placeholder="Enter Linkedin Link" value="{{ websiteSetupValue('linkedin') }}"
                                        data-input>
                                    <input type="hidden" name="type[]" value="linkedin">
                                </div>
                            </div>
                        </div>
                        <x-save-btn text="Save" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
