<?php

namespace App\Livewire\Admin\Teacher;

use App\Models\Teacher;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $page_title = 'Add Teacher';

    public $hidden_id, $name, $designation,$qualification, $experience, $description, $image, $show_image;
    public function render()
    {
        return view('livewire.admin.teacher.form')->layout('admin.layouts.app');
    }
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'designation' => 'required',
            'qualification' => 'required',
            'experience' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);
         try {

            $data = new Teacher;
            $data->name = $this->name;
            $data->designation = $this->designation;
            $data->qualification = $this->qualification;
            $data->experience = $this->experience;
            $data->description = $this->description;
            $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
            $data->image = $this->image->storeAs('teacher', $image_name, 'public');
            $data->save();

            session()->flash('success', 'Teacher created successfully !!');
            return $this->redirectRoute('admin.teacher.index', navigate: true);

         } catch (\Throwable $th) {

            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );

         }
    }
}
