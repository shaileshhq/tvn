<?php

namespace App\Livewire\Admin\StudentRegister;

use Livewire\Component;
use App\Models\StudentRegister;

class Create extends Component
{
    public $page_title = 'student register';
    public $hidden_id, $addmission_no, $name, $email, $contact, $address, $verified;
    public function render()
    {
        return view('livewire.admin.student-register.form')->layout('admin.layouts.app');
    }
    public function save()
    {

        $this->validate([
            'addmission_no' => 'required',
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'verified' => 'required'
        ]);

        try {
            $data = new StudentRegister;
            $data->addmission_no = $this->addmission_no;
            $data->name = $this->name;
            $data->email = $this->email;
            $data->contact = $this->contact;
            $data->address = $this->address;
            $data->verified = $this->verified;
            $data->save();

            session()->flash('success', 'Student Register created successfully !!');
            return $this->redirectRoute('admin.student-register.index', navigate: true);

        } catch (\Throwable $th) {

            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );

        }
    }
}
