<?php

namespace App\Livewire\Admin\TcForm;

use App\Models\TcForm;
use Livewire\Component;

class Create extends Component
{
    public $page_title = 'Add TC Form';
    public $hidden_id, $name, $father_name, $caste, $date_of_birth, $result, $qualified, $full_ammount, $issue_date;

    public function render()
    {
        return view('livewire.admin.tc-form.form')->layout('admin.layouts.app');
    }
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'father_name' => 'required',
            'caste' => 'required',
            'date_of_birth' => 'required',
            'result' => 'required',
            'qualified' => 'required',
            'full_ammount' => 'required',
            'issue_date' => 'required'

        ]);
        try {
            $data = new TcForm;
            $data->name = $this->name;
            $data->father_name = $this->father_name;
            $data->caste = $this->caste;
            $data->date_of_birth = $this->date_of_birth;
            $data->result = $this->result;
            $data->qualified = $this->qualified;
            $data->full_ammount = $this->full_ammount;
            $data->issue_date = $this->issue_date;
            $data->save();

            session()->flash('success', 'TC Form created successfully !!');
            return $this->redirectRoute('admin.tc-form.index', navigate: true);

        } catch (\Throwable $th) {

            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );

        }
    }

}
