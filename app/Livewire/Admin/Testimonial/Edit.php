<?php

namespace App\Livewire\Admin\Testimonial;

use Livewire\Component;
use App\Models\Testimonial;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $page_title = 'Edit Testimonial';
    public $hidden_id, $name, $designation, $description, $image, $show_image;

    public function mount($id)
    {
        $this->hidden_id = $id;

        $data = Testimonial::findOrFail($id);
        $this->name = $data->name;
        $this->designation = $data->designation;
        $this->description = $data->description;
        $this->show_image = $data->image;
    }

    public function render()
    {
        return view('livewire.admin.testimonial.form')->layout('admin.layouts.app');
    }

    public function update()
    {
        $this->validate([
            'name'        => 'required',
            'designation' => 'required',
            'description' => 'required',
            'image'       => 'nullable|mimes:jpeg,jpg,png'
        ]);

            $data = Testimonial::find($this->hidden_id);
            $data->title = $this->title;
            $data->designation = $this->designation;
            $data->description = $this->description;
            if($this->image){
                $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
                $data->image = $this->image->storeAs('testimonial', $image_name, 'public');
            }
            $data->save();

        session()->flash('success', 'News update successfully !!');
        return $this->redirectRoute('admin.testimonial.index', navigate: true);
    }
}
