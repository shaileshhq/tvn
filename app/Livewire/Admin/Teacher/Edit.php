<?php

namespace App\Livewire\Admin\Teacher;

use App\Models\Teacher;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $page_title = 'Edit Teacher';
    public $hidden_id, $name, $designation,$qualification, $experience, $description, $image, $show_image;

    public function mount($id)
    {
        $this->hidden_id = $id;

        $data = Teacher::findOrFail($id);
        $this->name = $data->name;
        $this->designation = $data->designation;
        $this->qualification = $data->qualification;
        $this->experience = $data->experience;
        $this->description = $data->description;
        $this->show_image = $data->image;
    }
    public function render()
    {
        return view('livewire.admin.teacher.form')->layout('admin.layouts.app');
    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'designation' => 'required',
            'qualification' => 'required',
            'experience' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png'
        ]);

            $data = Teacher::find($this->hidden_id);
            $data->name = $this->name;
            $data->designation = $this->designation;
            $data->qualification = $this->qualification;
            $data->experience = $this->experience;
            $data->description = $this->description;
            if($this->image){
                $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
                $data->image = $this->image->storeAs('teacher', $image_name, 'public');
            }
            $data->save();

        session()->flash('success', 'Teacher update successfully !!');
        return $this->redirectRoute('admin.teacher.index', navigate: true);
    }
}
