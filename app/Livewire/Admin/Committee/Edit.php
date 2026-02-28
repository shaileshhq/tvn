<?php

namespace App\Livewire\Admin\Committee;

use Livewire\Component;
use App\Models\Committee;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $page_title = 'Edit Managing Committee';
    public $hidden_id, $name, $number, $address, $occupation, $designation, $image, $show_image;
    public function mount($id)
    {
        $this->hidden_id = $id;

        $data = Committee::findOrFail($id);
        $this->name = $data->name;
        $this->number = $data->number;
        $this->address = $data->address;
        $this->occupation = $data->occupation;
        $this->designation = $data->designation;
        $this->show_image = $data->image;
    }

    public function render()
    {
        return view('livewire.admin.committee.form')->layout('admin.layouts.app');
    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'number' => 'required',
            'address' => 'required',
            'occupation' => 'required',
            'designation' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png'
        ]);
        dd(1);

            $data = Committee::find($this->hidden_id);
            $data->name = $this->name;
            $data->number = $this->number;
            $data->address = $this->address;
            $data->occupation = $this->occupation;
            $data->designation = $this->designation;
            if($this->image){
                $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
                $data->image = $this->image->storeAs('comittee', $image_name, 'public');
            }
            $data->save();

        session()->flash('success', 'Managing Committee update successfully !!');
        return $this->redirectRoute('admin.committee.index', navigate: true);
    }
}
