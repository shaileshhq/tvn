<?php

namespace App\Livewire\Admin\StudentAdmission;

use Livewire\Component;
use App\Models\ClassMaster;
use App\Models\AcademicYear;
use Livewire\WithFileUploads;
use App\Models\StudentAdmission;

class Create extends Component
{
    use WithFileUploads;
    public $page_title = 'Add Student Admission';
    public $hidden_id, $admission_no, $acdamic_id, $class_id, $transport, $name, $gender, $father_name, $mother_name, $date_of_birth, $adhaar_no, $contact, $address, $admission_date, $email, $password, $image, $show_image;

    public function render()
    {
        $academic_year_list = AcademicYear::get();
        $class_list = ClassMaster::get();
        return view('livewire.admin.student-admission.form', compact('academic_year_list', 'class_list'))->layout('admin.layouts.app');
    }

    public function save()
    {
        $this->validate([
            'admission_no' => 'required',
            'acdamic_id' => 'required',
            'class_id' => 'required',
            'transport' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'date_of_birth' => 'required',
            'adhaar_no' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'admission_date' => 'required',
            'email' => 'required',
            'password' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png'

        ]);
        try {
            $data = new StudentAdmission;
            $data->admission_no = $this->admission_no;
            $data->acdamic_id = $this->acdamic_id;
            $data->class_id = $this->class_id;
            $data->transport = $this->transport;
            $data->name = $this->name;
            $data->gender = $this->gender;
            $data->father_name = $this->father_name;
            $data->mother_name = $this->mother_name;
            $data->date_of_birth = $this->date_of_birth;
            $data->adhaar_no = $this->adhaar_no;
            $data->contact = $this->contact;
            $data->address = $this->address;
            $data->admission_date = $this->admission_date;
            $data->email = $this->email;
            $data->password = $this->password;
            $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
            $data->image = $this->image->storeAs('student', $image_name, 'public');
            $data->save();

            session()->flash('success', 'student admission created successfully !!');
            return $this->redirectRoute('admin.student-admission.index', navigate: true);

        } catch (\Throwable $th) {

            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );

        }
    }
}
