<?php

namespace App\Livewire\Admin\MeritList;

use Livewire\Component;
use App\Models\MeritList;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $page_title = 'Edit Merit List';
    public $hidden_id, $name, $course,$rank, $percentage, $session, $image, $show_image;

    public function mount($id)
    {
        $this->hidden_id = $id;

        $data = MeritList::findOrFail($id);
        $this->name = $data->name;
        $this->course = $data->course;
        $this->rank = $data->rank;
        $this->percentage = $data->percentage;
        $this->session = $data->session;
        $this->show_image = $data->image;
    }
    public function render()
    {
        return view('livewire.admin.merit-list.form')->layout('admin.layouts.app');
    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'course' => 'required',
            'rank' => 'required',
            'percentage' => 'required',
            'session' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png'
        ]);

            $data = MeritList::find($this->hidden_id);
            $data->name = $this->name;
            $data->course = $this->course;
            $data->rank = $this->rank;
            $data->percentage = $this->percentage;
            $data->session = $this->session;
            if($this->image){
                $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
                $data->image = $this->image->storeAs('teacher', $image_name, 'public');
            }
            $data->save();

        session()->flash('success', 'Merit List update successfully !!');
        return $this->redirectRoute('admin.merit-list.index', navigate: true);
    }
}
