<?php

namespace App\Livewire\Admin\Concession;

use App\Models\Fees;
use Livewire\Component;
use App\Models\Concession;
use App\Models\ClassMaster;
use App\Models\AcademicYear;
use App\Models\StudentAdmission;

class Create extends Component
{
    public $page_title = "Add Concession";

    public $hidden_id, $academic_year_id, $class_id, $student_admission_id, $fee_id, $concession;

    // public $student_list = [];

    public function render()
    {
        $academic_year = AcademicYear::get();
        $fees_list = Fees::get();
        $class_list = ClassMaster::get();
        $student_list = StudentAdmission::orderBy('name', 'asc')->where('class_id', $this->class_id)->get();
        return view('livewire.admin.concession.form', compact('academic_year', 'fees_list', 'class_list', 'student_list'))->layout('admin.layouts.app');
    }

    // public function getStudentList()
    // {
    //     $this->student_list = StudentAdmission::where('class_id', $this->class_id)->get();
    // }

    public function save()
    {
        $this->validate([
            'academic_year_id' => 'required',
            'class_id' => 'required',
            'student_admission_id' => 'required',
            'fee_id' => 'required',
            'concession' => 'required'
        ]);
        try {
            $data = new Concession;
            $data->academic_year_id = $this->academic_year_id;
            $data->class_id = $this->class_id;
            $data->student_admission_id = $this->student_admission_id;
            $data->fee_id = $this->fee_id;
            $data->concession = $this->concession;
            $data->save();

            session()->flash('success', 'Concession created successfully !!');
            return $this->redirectRoute('admin.concession.index', navigate: true);

        } catch (\Throwable $th) {

            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );

        }
    }

}
