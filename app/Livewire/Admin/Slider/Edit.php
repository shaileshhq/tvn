<?php

namespace App\Livewire\Admin\Slider;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $page_title = 'Edit Slider';
    public $hidden_id, $title, $short_desc, $image, $show_image;

    public function mount($id)
    {
        $this->hidden_id = $id;

        $data = Slider::findOrFail($id);
        $this->title = $data->title;
        $this->short_desc = $data->short_desc;
        $this->show_image = $data->image;
    }

    public function render()
    {
        return view('livewire.admin.slider.form')->layout('admin.layouts.app');
    }
    public function update()
    {
        $this->validate([
            'title' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png'
        ]);

            $data = Slider::find($this->hidden_id);
            $data->title = $this->title;
            if($this->image){
                $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
                $data->image = $this->image->storeAs('slider', $image_name, 'public');
            }
            $data->save();

        session()->flash('success', 'Slider update successfully !!');
        return $this->redirectRoute('admin.slider.index', navigate: true);
    }
}
