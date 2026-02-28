<?php

namespace App\Livewire\Admin\Testimonial;

use Livewire\Component;
use App\Models\Testimonial;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $page_title = 'Add Testimonial';
    public $hidden_id, $name, $designation, $description, $image, $show_image;

    public function render()
    {
        return view('livewire.admin.testimonial.form')->layout('admin.layouts.app');
    }

    public function save()
    {
        $this->validate([
            'name'        => 'required',
            'designation' => 'required',
            'description' => 'required',
            'image'       => 'required|mimes:jpeg,jpg,png'
        ]);
         try {
            $data = new Testimonial;
            $data->name = $this->name;
            $data->designation = $this->designation;
            $data->description = $this->description;
            $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
            $data->image = $this->image->storeAs('testimonial', $image_name, 'public');
            $data->save();

            session()->flash('success', 'News created successfully !!');
            return $this->redirectRoute('admin.testimonial.index', navigate: true);

         } catch (\Throwable $th) {

            $this->dispatch('alert',
                 type: 'error',
                 message: 'Somthing went worng !!'
             );

         }
    }
}
