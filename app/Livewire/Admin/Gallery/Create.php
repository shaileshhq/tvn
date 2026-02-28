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

    public function render()
    {
        $academic_years =AcademicYear::where('status' , 1)->get();
        return view('livewire.admin.gallery.form', compact('academic_years'))->layout('admin.layouts.app');
    }
    public function save()
    {
        $this->validate([
            'academic_year' =>'required',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);
         try {

            $data = new Gallery;
            $data->academic_year = $this->academic_year;
            $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
            $data->image = $this->image->storeAs('gallery', $image_name, 'public');
            $data->save();

            session()->flash('success', 'Gallery created successfully !!');
            return $this->redirectRoute('admin.gallery.index', navigate: true);

         } catch (\Throwable $th) {

            $this->dispatch('alert',
                 type: 'error',
                 message: 'Somthing went worng !!'
             );

         }
    }
}
