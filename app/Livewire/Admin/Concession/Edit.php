<?php

namespace App\Livewire\Admin\Concession;

use App\Models\Fees;
use Livewire\Component;
use App\Models\Concession;
use App\Models\ClassMaster;
use App\Models\AcademicYear;
use App\Models\StudentAdmission;

class Edit extends Component
{
    public $page_title = 'Edit Concession';

    public $hidden_id, $academic_year_id, $class_id, $student_admission_id, $fee_id, $concession;

    public function mount($id)
    {
        $this->hidden_id = $id;
        $data = Concession::findOrFail($id);
        $this->academic_year_id = $data->academic_year_id;
        $this->class_id = $data->class_id;
        $this->student_admission_id = $data->student_admission_id;
        $this->fee_id = $data->fee_id;
        $this->concession = $data->concession;
    }
    public function render()
    {
        $academic_year = AcademicYear::get();
        $fees_list = Fees::get();
        $class_list = ClassMaster::get();
        $student_list = StudentAdmission::orderBy('name', 'asc')->where('class_id', $this->class_id)->get();
        return view('livewire.admin.concession.form', compact('academic_year', 'fees_list', 'class_list', 'student_list'))->layout('admin.layouts.app');
    }
    public function update()
    {
        $this->validate([
            'academic_year_id' => 'required',
            'class_id' => 'required',
            'student_admission_id' => 'required',
            'fee_id' => 'required',
            'concession' => 'required'
        ]);

        $data = Concession::find($this->hidden_id);
            $data->academic_year_id = $this->academic_year_id;
            $data->class_id = $this->class_id;
            $data->student_admission_id = $this->student_admission_id;
            $data->fee_id = $this->fee_id;
            $data->concession = $this->concession;
        $data->save();

        session()->flash('success', 'Concession update successfully !!');
        return $this->redirectRoute('admin.concession.index', navigate: true);
    }
}
