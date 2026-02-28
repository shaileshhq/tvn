<?php

namespace App\Livewire\Admin\StudentRegister;

use Livewire\Component;
use App\Models\StudentRegister;

class Edit extends Component
{
    public $page_title = 'Edit Student Register';

    public $hidden_id, $addmission_no, $name, $email, $contact, $address, $verified;

    public function mount($id)
    {
        $this->hidden_id = $id;
        $data = StudentRegister::findOrFail($id);
        $this->addmission_no = $data->addmission_no;
        $this->name = $data->name;
        $this->email = $data->email;
        $this->contact = $data->contact;
        $this->address = $data->address;
        $this->verified = $data->verified;
    }

    public function render()
    {
        return view('livewire.admin.student-register.form')->layout('admin.layouts.app');;
    }
    public function update()
    {
        $this->validate([
            'addmission_no' => 'required',
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'verified' => 'required'
        ]);

            $data = StudentRegister::find($this->hidden_id);
            $data->addmission_no = $this->addmission_no;
            $data->name = $this->name;
            $data->email = $this->email;
            $data->contact = $this->contact;
            $data->address = $this->address;
            $data->verified = $this->verified;
            $data->save();

        session()->flash('success', 'student register update successfully !!');
        return $this->redirectRoute('admin.student-register.index', navigate: true);
    }
}
