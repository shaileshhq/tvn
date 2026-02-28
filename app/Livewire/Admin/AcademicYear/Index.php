<?php

namespace App\Livewire\Admin\AcademicYear;

use Livewire\Component;
use App\Models\AcademicYear;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $page_title = 'Academic Year';

    public function render()
    {
        $list = AcademicYear::paginate(getPaginate());
        return view('livewire.admin.academic-year.index', compact('list'))->layout('admin.layouts.app');
    }

    public function updateStatus($id)
    {
        try {

            $data = AcademicYear::find($id);
            $data->status = $data->status ? 0 : 1;
            $data->save();
            $this->dispatch('alert',
                type: $data->status==1 ? 'success' : 'error',
                message: $data->status== 1 ? 'Academic year active successfully !!': 'Academic year inactive successfully !!'
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
            AcademicYear::destroy($id);
            $this->dispatch('alert',
                type: 'success',
                message: 'Academic year deleted successfully !!'
            );
        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }
}
