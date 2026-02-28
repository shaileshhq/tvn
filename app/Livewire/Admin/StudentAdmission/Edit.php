<?php

namespace App\Livewire\Admin\StudentAdmission;

use Livewire\Component;
use App\Models\ClassMaster;
use App\Models\AcademicYear;
use App\Models\StudentAdmission;

class Edit extends Component
{
    public $page_title = 'Edit Student Admission';
    public $hidden_id, $admission_no, $name, $gender, $acdamic_id, $class_id, $transport, $father_name, $mother_name, $date_of_birth, $adhaar_no, $contact, $address, $admission_date, $email, $password, $image, $show_image;

    public function mount($id)
    {
        $this->hidden_id = $id;

        $data = StudentAdmission::findOrFail($id);
        $this->admission_no  = $data->admission_no;
        $this->name          = $data->name;
        $this->acdamic_id    = $data->acdamic_id;
        $this->class_id      = $data->class_id;
        $this->transport     = $data->transport;
        $this->gender        = $data->gender;
        $this->father_name   = $data->father_name;
        $this->mother_name   = $data->mother_name;
        $this->date_of_birth = $data->date_of_birth;
        $this->adhaar_no     = $data->adhaar_no;
        $this->contact       = $data->contact;
        $this->address       = $data->address;
        $this->admission_date = $data->admission_date;
        $this->email         = $data->email;
        $this->password      =  $data->password;
        $this->show_image    = $data->image;
    }
    public function render()
    {
        $academic_year_list = AcademicYear::get();
        $class_list = ClassMaster::get();
        return view('livewire.admin.student-admission.form', compact('academic_year_list', 'class_list'))->layout('admin.layouts.app');
    }
    public function update()
    {
        $this->validate([
            'admission_no'   => 'required',
            'name'           => 'required',
            'gender'         => 'required',
            'father_name'    => 'required',
            'mother_name'    => 'required',
            'adhaar_no'      => 'required',
            'contact'        => 'required',
            'address'        => 'required',
            'admission_date' => 'required',
            'date_of_birth'  => 'date_of_birth',
            'email'          => 'required',
            'password'       => 'required',
            'image'          => 'nullable|mimes:jpeg,jpg,png'
        ]);

            $data = StudentAdmission::find($this->hidden_id);
            $data->admission_no  = $this->admission_no;
            $data->name          = $this->name;
            $data->gender        = $this->gender;
            $data->father_name   = $this->father_name;
            $data->mother_name   = $this->mother_name;
            $data->date_of_birth = $this->date_of_birth;
            $data->adhaar_no     = $this->adhaar_no;
            $data->contact       = $this->contact;
            $data->address       = $this->address;
            $data->admission_date = $this->admission_date;
            $data->email         = $this->email;
            $data->password      = $this->password;
            if($this->image){
                $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
                $data->image = $this->image->storeAs('student', $image_name, 'public');
            }
            $data->save();

        session()->flash('success', 'student Admission update successfully !!');
        return $this->redirectRoute('admin.student-admission.index', navigate: true);
    }
}
