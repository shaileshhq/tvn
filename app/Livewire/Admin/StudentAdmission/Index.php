<?php

namespace App\Livewire\Admin\StudentAdmission;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\StudentAdmission;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $page_title = 'Student Admission';
    public function render()
    {
        $list = StudentAdmission::paginate(getPaginate());
        return view('livewire.admin.student-admission.index', compact('list'))->layout('admin.layouts.app');
    }
     public function updateStatus($id)
     {
        try {

            $data = StudentAdmission::find($id);
            $data->status = $data->status ? 0 : 1;
            $data->save();
            $this->dispatch('alert',
                type: $data->status==1 ? 'success' : 'error',
                message: $data->status== 1 ? 'Student Admission data active successfully !!': 'Student Admission data inactive successfully !!'
            );

        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }

    public function delete($id)
    {
        try {
            StudentAdmission::destroy($id);
            $this->dispatch('alert',
                type: 'success',
                message: 'Student Admission data deleted successfully !!'
            );
        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }
}
