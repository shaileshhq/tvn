<?php

namespace App\Livewire\Admin\SchoolTime;

use Livewire\Component;
use App\Models\SchoolTime;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $page_title = 'Add School Timing';
    public $hidden_id, $title, $description, $open, $close;
    public function render()
    {
        return view('livewire.admin.school-time.form')->layout('admin.layouts.app');
    }

    public function save()
    {
        $this->validate([
            'title'         => 'required',
            'description'   => 'required',
            'open'           => 'required',
            'close'         => 'required',

        ]);
         try {

            $data = new SchoolTime;
            $data->title = $this->title;
            $data->description = $this->description;
            $data->open = $this->open;
            $data->close = $this->close;

            $data->save();

            session()->flash('success', 'School Time created successfully !!');
            return $this->redirectRoute('admin.school-time.index', navigate: true);

         } catch (\Throwable $th) {

            $this->dispatch('alert',
                 type: 'error',
                 message: 'Somthing went worng !!'
             );

         }
    }
}
