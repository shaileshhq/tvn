<?php

namespace App\Livewire\Admin\Gallery;

use App\Models\Gallery;
use Livewire\Component;
use App\Models\AcademicYear;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $page_title = 'Add Gallery';
    public $hidden_id, $academic_year, $image, $show_image;

    // Multiple images support
    public $images = [];

    public function render()
    {
        $academic_years = AcademicYear::where('status', 1)->get();
        return view('livewire.admin.gallery.form', compact('academic_years'))->layout('admin.layouts.app');
    }

    public function save()
    {
        $this->validate([
            'academic_year' => 'required',
            'images' => 'required|array|min:1',
            'images.*' => 'required|mimes:jpeg,jpg,png|max:5120'
        ], [
            'images.required' => 'Please select at least one image.',
            'images.min' => 'Please select at least one image.',
            'images.*.required' => 'File selection is required.',
            'images.*.mimes' => 'Each file must be a jpeg, jpg, or png image.',
            'images.*.max' => 'Each image must not exceed 5MB.',
        ]);

        try {
            foreach ($this->images as $img) {
                $data = new Gallery;
                $data->academic_year = $this->academic_year;
                $image_name = time() . '-' . rand(1000, 9999) . '.' . $img->extension();
                $data->image = $img->storeAs('gallery', $image_name, 'public');
                $data->save();
            }

            session()->flash('success', count($this->images) . ' Gallery image(s) created successfully !!');
            return $this->redirectRoute('admin.gallery.index', navigate: true);

        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Something went wrong while saving images.'
            );
        }
    }
}
