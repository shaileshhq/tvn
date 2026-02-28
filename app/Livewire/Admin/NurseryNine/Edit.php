<?php

namespace App\Livewire\Admin\NurseryNine;

use Livewire\Component;
use App\Models\NurseryNine;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $page_title = 'Edit nursery to nine';
    public $hidden_id, $name, $class, $father_name, $father_occupation, $last_school, $cbsc_affilated,$subject, $tc_date, $signature, $image, $show_image;


    public function mount($id)
    {
        $this->hidden_id = $id;

        $data = NurseryNine::findOrFail($id);
        $this->name = $data->name;
        $this->class = $data->class;
        $this->father_name = $data->father_name;
        $this->father_occupation = $data->father_occupation;
        $this->last_school = $data->last_school;
        $this->cbsc_affilated = $data->cbsc_affilated;
        $this->subject = $data->subject;
        $this->tc_date = $data->tc_date;
        $this->signature = $data->signature;
        $this->show_image = $data->image;
    }
    public function render()
    {
        return view('livewire.admin.nursery-nine.form')->layout('admin.layouts.app');
    }
    public function update()
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

            $data = NurseryNine::find($this->hidden_id);
            $data->name = $this->name;
            $data->class = $this->class;
            $data->father_name = $this->father_name;
            $data->father_occupation = $this->father_occupation;
            $data->last_school = $this->last_school;
            $data->cbsc_affilated = $this->cbsc_affilated;
            $data->subject = $this->subject;
            $data->tc_date = $this->tc_date;
            $data->signature = $this->signature;
            if($this->image){
                $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
                $data->image = $this->image->storeAs('admission', $image_name, 'public');
            }
            $data->save();

        session()->flash('success', 'Nursery to Nine update successfully !!');
        return $this->redirectRoute('admin.nursery-to-nine.index', navigate: true);
    }
}
