<?php

namespace App\Livewire\Admin\StudentAchievement;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\StudentAchievement;

class Create extends Component
{
    use WithFileUploads;
    public $page_title = 'Add Student Achievement';
    public $hidden_id, $title, $description, $image, $show_image;

    public function render()
    {
        return view('livewire.admin.student-achievement.form')->layout('admin.layouts.app');
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);
         try {
            $data = new StudentAchievement;
            $data->title = $this->title;
            $data->description = $this->description;
            $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
            $data->image = $this->image->storeAs('achievement', $image_name, 'public');
            $data->save();

            session()->flash('success', 'Achievement created successfully !!');
            return $this->redirectRoute('admin.achievement.index', navigate: true);

         } catch (\Throwable $th) {

            $this->dispatch('alert',
                 type: 'error',
                 message: 'Somthing went worng !!'
             );

         }
    }
}
