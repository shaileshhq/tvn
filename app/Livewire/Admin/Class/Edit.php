<?php

namespace App\Livewire\Admin\Class;

use Livewire\Component;
use App\Models\ClassMaster;

class Edit extends Component
{
    public $page_title = 'Edit Class';

    public $hidden_id, $class_name;

    public function mount($id)
    {
        $this->hidden_id = $id;

        $data = ClassMaster::findOrFail($id);
        $this->class_name = $data->class_name;
    }
    public function render()
    {
        return view('livewire.admin.class.form')->layout('admin.layouts.app');
    }
    public function update()
    {
        $this->validate([
            'class_name' => 'required'
        ]);

        $data = ClassMaster::find($this->hidden_id);
        $data->class_name = $this->class_name;
        $data->save();

        session()->flash('success', 'Class update successfully !!');
        return $this->redirectRoute('admin.class.index', navigate: true);
    }
}
