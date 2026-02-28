<?php

namespace App\Livewire\Admin\Admissioneleven;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Admissioneleven;

class Edit extends Component
{
    use WithFileUploads;
    public $page_title = 'Edit Admission Eleven';
    public  $hidden_id, $name, $class,$date_of_birth,$caste,$father_name,$father_occupation,$roll_no,$stream,$date_of_admission,$tc_date,$certificate,$signature, $image, $show_image;

    public function mount($id)
    {
        $this->hidden_id = $id;

        $data = Admissioneleven::findOrFail($id);
        $this->name =  $data->name;
        $this->class = $data->class;
        $this->date_of_birth =  $data->date_of_birth;
        $this->caste =  $data->caste;
        $this->father_name = $data->father_name;
        $this->father_occupation = $data->father_occupation;
        $this->roll_no =  $data->roll_no;
        $this->stream = $data->stream;
        $this->date_of_admission = $data->date_of_admission;
        $this->tc_date =  $data->tc_date;
        $this->certificate =  $data->certificate;
        $this->signature =  $data->signature;
        $this->show_image = $data->image;
    }
    public function render()
    {
        return view('livewire.admin.admissioneleven.form')->layout('admin.layouts.app');
    }
    public function update()
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

            $data = Admissioneleven::find($this->hidden_id);
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
            if($this->image){
                $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
                $data->image = $this->image->storeAs('admission', $image_name, 'public');
            }
            $data->save();

        session()->flash('success', 'Admission Eleven update successfully !!');
        return $this->redirectRoute('admin.admission-eleven.index', navigate: true);
    }
}
