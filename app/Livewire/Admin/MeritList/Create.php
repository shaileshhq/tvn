<?php

namespace App\Livewire\Admin\MeritList;

use Livewire\Component;
use App\Models\MeritList;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $page_title = 'Add Merit List';
    public $hidden_id, $name, $course,$rank, $percentage, $session, $image, $show_image;

    public function render()
    {
        return view('livewire.admin.merit-list.form')->layout('admin.layouts.app');
    }
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'course' => 'required',
            'rank' => 'required',
            'percentage' => 'required',
            'session' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);
         try {

            $data = new MeritList;
            $data->name = $this->name;
            $data->course = $this->course;
            $data->rank = $this->rank;
            $data->percentage = $this->percentage;
            $data->session = $this->session;

            $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
            $data->image = $this->image->storeAs('meritlist', $image_name, 'public');
            $data->save();

            session()->flash('success', 'Merit List created successfully !!');
            return $this->redirectRoute('admin.merit-list.index', navigate: true);

         } catch (\Throwable $th) {

            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );

         }
    }
}
