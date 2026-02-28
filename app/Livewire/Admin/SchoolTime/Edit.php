<?php

namespace App\Livewire\Admin\SchoolTime;

use Livewire\Component;
use App\Models\SchoolTime;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $page_title = 'Edit Timing';
    public $hidden_id, $title, $description, $open, $close;

    public function mount($id)
    {
        $this->hidden_id = $id;

        $data = SchoolTime::findOrFail($id);
        $this->title = $data->title;
        $this->description = $data->description;
        $this->open = $data->open;
        $this->close = $data->close;
    }

    public function render()
    {
        return view('livewire.admin.school-time.form')->layout('admin.layouts.app');
    }

    public function update()
    {
        $this->validate([
            'title'         => 'required',
            'description'   => 'required',
            'open'           => 'required',
            'close'         => 'required',

        ]);
         try {

            $data = SchoolTime::find($this->hidden_id);
            $data->title = $this->title;
            $data->description = $this->description;
            $data->open = $this->open;
            $data->close = $this->close;

            $data->save();

            session()->flash('success', 'School Time updaed successfully !!');
            return $this->redirectRoute('admin.school-time.index', navigate: true);

         } catch (\Throwable $th) {

            $this->dispatch('alert',
                 type: 'error',
                 message: 'Somthing went worng !!'
             );

         }
    }
}
