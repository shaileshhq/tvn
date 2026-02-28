<?php

namespace App\Livewire\Admin\Class;

use Livewire\Component;
use App\Models\ClassMaster;

class Create extends Component
{
    public $page_title = 'Add Class';
    public $hidden_id, $class_name;

    public function render()
    {
        return view('livewire.admin.class.form')->layout('admin.layouts.app');
    }
    public function save()
    {
        $this->validate([
            'class_name' => 'required'
        ]);
        try {
            $data = new ClassMaster;
            $data->class_name = $this->class_name;
            $data->save();

            session()->flash('success', 'Class created successfully !!');
            return $this->redirectRoute('admin.class.index', navigate: true);

        } catch (\Throwable $th) {

            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );

        }
    }

}
