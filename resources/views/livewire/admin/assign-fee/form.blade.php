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
                            <x-cancel-btn text="Back" route="{{route('admin.class.index')}}"/>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="{{ $hidden_id ? 'update()' : 'save()' }}">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="month">Fee Month</label>
                            </div>
                            <div class="col-md-8 mb-3">
                                <input type="checkbox" id="jan" value="jan" wire:model="month"> <label for="jan">Jan</label>
                                <input type="checkbox" id="feb" value="feb" wire:model="month"> <label for="feb">Feb</label>
                                <input type="checkbox" id="mar" value="mar" wire:model="month"> <label for="mar">Mar</label>
                                <input type="checkbox" id="apr" value="apr" wire:model="month"> <label for="apr">Apr</label>
                                <input type="checkbox" id="may" value="may" wire:model="month"> <label for="may">May</label>
                                <input type="checkbox" id="jun" value="jun" wire:model="month"> <label for="jun">Jun</label>
                                <input type="checkbox" id="jul" value="jul" wire:model="month"> <label for="jul">Jul</label>
                                <input type="checkbox" id="aug" value="aug" wire:model="month"> <label for="aug">Aug</label>
                                <input type="checkbox" id="sep" value="sep" wire:model="month"> <label for="sep">Sep</label>
                                <input type="checkbox" id="oct" value="oct" wire:model="month"> <label for="oct">Oct</label>
                                <input type="checkbox" id="nov" value="nov" wire:model="month"> <label for="nov">Nov</label>
                                <input type="checkbox" id="dec" value="dec" wire:model="month"> <label for="dec">Dec</label>
                                @error('month')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="academic_year_id">Academic Year</label>
                                <select class="form-control @error('academic_year_id') is-invalid @enderror" id="academic_year_id" wire:model="academic_year_id">
                                    <option value="">Select Academic Year</option>
                                    @foreach ($academic_year as $year)
                                        <option value="{{$year->id}}">{{$year->year_name}}</option>
                                    @endforeach
                                </select>
                                @error('academic_year_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="fee_id">Fees</label>
                                <select class="form-control @error('fee_id') is-invalid @enderror" id="fee_id" wire:model="fee_id">
                                    <option value="">Select Fees</option>
                                    @foreach ($fees_list as $fee)
                                        <option value="{{$fee->id}}">{{$fee->fee_name}}</option>
                                    @endforeach
                                </select>
                                @error('fee_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="class_id">Class</label>
                                <select class="form-control @error('class_id') is-invalid @enderror" id="class_id" wire:model.live="class_id">
                                    <option value="">Select Class</option>
                                    @foreach ($class_list as $class)
                                        <option value="{{$class->id}}">{{$class->class_name}}</option>
                                    @endforeach
                                </select>
                                @error('class_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="ammount">Ammount</label>
                                <input type="text" class="form-control @error('ammount') is-invalid @enderror"
                                    id="ammount" wire:model="ammount" placeholder="Enter ammount">
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

