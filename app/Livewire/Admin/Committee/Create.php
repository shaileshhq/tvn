<?php

namespace App\Livewire\Admin\Committee;

use Livewire\Component;
use App\Models\Committee;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $page_title = 'Add Managing Committee';
    public $hidden_id, $name, $number, $address, $occupation, $designation, $image, $show_image;
    public function render()
    {
        return view('livewire.admin.committee.form')->layout('admin.layouts.app');
    }
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'number' => 'required',
            'address' => 'required',
            'occupation' => 'required',
            'designation' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);
         try {

            $data = new Committee;
            $data->name = $this->name;
            $data->number = $this->number;
            $data->address = $this->address;
            $data->occupation = $this->occupation;
            $data->designation = $this->designation;
            $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
            $data->image = $this->image->storeAs('comittee', $image_name, 'public');
            $data->save();

            session()->flash('success', 'Managing Committee  created successfully !!');
            return $this->redirectRoute('admin.committee.index', navigate: true);

         } catch (\Throwable $th) {

            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );

         }
    }
}
