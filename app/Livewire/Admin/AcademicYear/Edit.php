<?php

namespace App\Livewire\Admin\AcademicYear;

use Livewire\Component;
use App\Models\AcademicYear;

class Edit extends Component
{
    public $page_title = 'Edit Academic Year';

    public $hidden_id, $year_name;

    public function mount($id)
    {
        $this->hidden_id = $id;

        $data = AcademicYear::findOrFail($id);
        $this->year_name = $data->year_name;
    }

    public function render()
    {
        return view('livewire.admin.academic-year.form')->layout('admin.layouts.app');
    }

    public function update()
    {
        $this->validate([
            'year_name' => 'required'
        ]);

        $data = AcademicYear::find($this->hidden_id);
        $data->year_name = $this->year_name;
        $data->save();

        session()->flash('success', 'Academic year update successfully !!');
        return $this->redirectRoute('admin.academic-year.index', navigate: true);
    }
}
