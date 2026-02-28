<?php

namespace App\Livewire\Admin\StudentAchievement;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\StudentAchievement;

class Edit extends Component
{
    use WithFileUploads;
    public $page_title = 'Edit Student Achievement';
    public $hidden_id, $title, $description, $image, $show_image;

    public function mount($id)
    {
        $this->hidden_id = $id;
        $data = StudentAchievement::findOrFail($id);
        $this->title = $data->title;
        $this->description = $data->description;
        $this->show_image = $data->image;
    }

    public function render()
    {
        return view('livewire.admin.student-achievement.form')->layout('admin.layouts.app');
    }

    public function update()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png'
        ]);

            $data = StudentAchievement::find($this->hidden_id);
            $data->title = $this->title;
            $data->description = $this->description;
            if($this->image){
                $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
                $data->image = $this->image->storeAs('achievement', $image_name, 'public');
            }
            $data->save();

        session()->flash('success', 'Achievement update successfully !!');
        return $this->redirectRoute('admin.achievement.index', navigate: true);
    }
}
