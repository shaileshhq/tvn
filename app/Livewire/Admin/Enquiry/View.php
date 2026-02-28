<?php

namespace App\Livewire\Admin\Enquiry;

use App\Models\enquiry;
use Livewire\Component;

class View extends Component
{
    public $page_title = 'Edit Enquiry';

    public $hidden_id, $name, $phone, $email, $message;

    public function mount($id)
    {
        $this->hidden_id = $id;

        $data = enquiry::findOrFail($id);
        $this->name = $data->name;
        $this->phone = $data->phone;
        $this->email = $data->email;
        $this->message = $data->message;
    }

    public function render()
    {
        return view('livewire.admin.enquiry.form')->layout('admin.layouts.app');
    }
}
