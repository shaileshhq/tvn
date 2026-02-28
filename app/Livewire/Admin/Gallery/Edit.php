<?php

namespace App\Livewire\Admin\Gallery;

use App\Models\Gallery;
use Livewire\Component;
use App\Models\AcademicYear;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $page_title = 'Edit Gallery';
    public $hidden_id, $academic_year, $image, $show_image;

    public function mount($id)
    {
        $this->hidden_id = $id;

        $data = Gallery::findOrFail($id);
        $this->academic_year = $data->academic_year;
        $this->show_image = $data->image;
    }
    public function render()
    {
        $academic_years =AcademicYear::where('status' , 1)->get();
        return view('livewire.admin.gallery.form', compact('academic_years'))->layout('admin.layouts.app');
    }
    public function update()
    {
        $this->validate([
            'image' => 'nullable|mimes:jpeg,jpg,png'
        ]);

            $data = Gallery::find($this->hidden_id);
            $data->academic_year = $this->academic_year;
            if($this->image){
                $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
                $data->image = $this->image->storeAs('gallery', $image_name, 'public');
            }
            $data->save();

        session()->flash('success', 'Gallery update successfully !!');
        return $this->redirectRoute('admin.gallery.index', navigate: true);
    }
}
