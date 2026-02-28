<?php

namespace App\Livewire\Admin\AssignFee;

use App\Models\Fees;
use Livewire\Component;
use App\Models\AssignFee;
use App\Models\ClassMaster;
use App\Models\AcademicYear;

class Create extends Component
{
    public $page_title = "Add Assign Fees";
    public $hidden_id, $academic_year_id, $class_id, $fee_id, $ammount, $month = [];
    public function render()
    {
        $academic_year = AcademicYear::get();
        $fees_list = Fees::get();
        $class_list = ClassMaster::get();
        return view('livewire.admin.assign-fee.form', compact('academic_year', 'fees_list', 'class_list'))->layout('admin.layouts.app');
    }
    public function save()
    {
        $this->validate([
            'month'  => 'required',
            'academic_year_id' => 'required',
            'class_id' => 'required',
            'fee_id' => 'required',
            'ammount' => 'required'
        ]);
        try {
            $data = new AssignFee;
            $data->month = $this->month;
            $data->academic_year_id = $this->academic_year_id;
            $data->class_id = $this->class_id;
            $data->fee_id = $this->fee_id;
            $data->ammount = $this->ammount;
            $data->save();

            session()->flash('success', 'Assign Fees created successfully !!');
            return $this->redirectRoute('admin.assign-fee.index', navigate: true);

        } catch (\Throwable $th) {

            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );

        }
    }


}
