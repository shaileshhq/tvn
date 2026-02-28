<?php

namespace App\Livewire\Admin\Admissioneleven;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Admissioneleven;

class Create extends Component
{
    use WithFileUploads;
    public $page_title = 'Add Admission Eleven';

    public $hidden_id, $name, $class,$date_of_birth,$caste,$father_name,$father_occupation,$roll_no,$stream,$date_of_admission,$tc_date,$certificate,$signature, $image, $show_image;
    public function render()
    {
        return view('livewire.admin.admissioneleven.form')->layout('admin.layouts.app');
    }
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'class' => 'required',
            'date_of_birth' => 'required',
            'caste' => 'required',
            'father_name' => 'required',
            'father_occupation' => 'required',
            'roll_no' => 'required',
            'stream' => 'required',
            'date_of_admission' => 'required',
            'tc_date' => 'required',
            'certificate' => 'required',
            'signature' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);
         try {

            $data = new Admissioneleven;
            $data->name = $this->name;
            $data->class = $this->class;
            $data->date_of_birth = $this->date_of_birth;
            $data->caste = $this->caste;
            $data->father_name = $this->father_name;
            $data->father_occupation = $this->father_occupation;
            $data->roll_no = $this->roll_no;
            $data->stream = $this->stream;
            $data->date_of_admission = $this->date_of_admission;
            $data->tc_date = $this->tc_date;
            $data->certificate = $this->certificate;
            $data->signature = $this->signature;
            $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
            $data->image = $this->image->storeAs('admission', $image_name, 'public');
            $data->save();

            session()->flash('success', 'Admission Eleven created successfully !!');
            return $this->redirectRoute('admin.admission-eleven.index', navigate: true);

         } catch (\Throwable $th) {

            $this->dispatch('alert',
                 type: 'error',
                 message: 'Somthing went worng !!'
             );

         }
    }
}
