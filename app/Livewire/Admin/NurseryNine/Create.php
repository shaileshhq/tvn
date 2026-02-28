<?php

namespace App\Livewire\Admin\NurseryNine;

use Livewire\Component;
use App\Models\NurseryNine;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $page_title = 'Add Nursery to Nine';

    public $hidden_id, $name, $class, $father_name, $father_occupation, $last_school, $cbsc_affilated, $subject, $tc_date, $signature, $image, $show_image;

    public function render()
    {
        return view('livewire.admin.nursery-nine.form')->layout('admin.layouts.app');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'class' =>'required',
            'father_name' =>'required',
            'father_occupation' =>'required',
            'last_school' =>'required',
            'cbsc_affilated' =>'required',
            'subject' =>'required',
            'tc_date' =>'required',
            'signature' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);

        try {

            $data = new NurseryNine;
            $data->name = $this->name;
            $data->class = $this->class;
            $data->father_name = $this->father_name;
            $data->father_occupation = $this->father_occupation;
            $data->last_school = $this->last_school;
            $data->cbsc_affilated = $this->cbsc_affilated;
            $data->subject = $this->subject;
            $data->tc_date = $this->tc_date;
            $data->signature = $this->signature;
            $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
            $data->image = $this->image->storeAs('admission', $image_name, 'public');
            $data->save();

            session()->flash('success', 'Nursery to Nine created successfully !!');
            return $this->redirectRoute('admin.nursery-to-nine.index', navigate: true);

        } catch (\Throwable $th) {

            $this->dispatch('alert',
                 type: 'error',
                 message: 'Somthing went worng !!'
             );

         }
    }
}
