<?php

namespace App\Livewire\Admin\AcademicYear;

use Livewire\Component;
use App\Models\AcademicYear;

class Create extends Component
{
    public $page_title = 'Add Academic Year';

    public $hidden_id, $year_name;

    public function render()
    {
        return view('livewire.admin.academic-year.form')->layout('admin.layouts.app');
    }

    public function save()
    {
        $this->validate([
            'year_name' => 'required'
        ]);
        try {
            $data = new AcademicYear;
            $data->year_name = $this->year_name;
            $data->save();

            session()->flash('success', 'Academic year created successfully !!');
            return $this->redirectRoute('admin.academic-year.index', navigate: true);

        } catch (\Throwable $th) {

            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );

        }
    }
}
