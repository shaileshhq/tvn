<?php

namespace App\Livewire\Admin\Slider;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $page_title = 'Add Slider';

    public $hidden_id, $title, $short_desc, $image, $show_image;

    public function render()
    {
        return view('livewire.admin.slider.form')->layout('admin.layouts.app');
    }
    public function save()
    {
        $this->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);
         try {

            $data = new Slider;
            $data->title = $this->title;
            $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
            $data->image = $this->image->storeAs('slider', $image_name, 'public');
            $data->save();

            session()->flash('success', 'Slider created successfully !!');
            return $this->redirectRoute('admin.slider.index', navigate: true);

         } catch (\Throwable $th) {

            $this->dispatch('alert',
                 type: 'error',
                 message: 'Somthing went worng !!'
             );

         }
    }
}
