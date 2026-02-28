<?php

namespace App\Livewire\Admin\StudentRegister;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\StudentRegister;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $page_title = 'Student Register';

    public function render()
    {
        $list = StudentRegister::paginate(getPaginate());
        return view('livewire.admin.student-register.index', compact('list'))->layout('admin.layouts.app');
    }
    public function updateStatus($id)
    {
        try {

            $data = StudentRegister::find($id);
            $data->status = $data->status ? 0 : 1;
            $data->save();
            $this->dispatch('alert',
                type: $data->status==1 ? 'success' : 'error',
                message: $data->status== 1 ? 'Student data active successfully !!': 'Student data inactive successfully !!'
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
            StudentRegister::destroy($id);
            $this->dispatch('alert',
                type: 'success',
                message: 'Student data deleted successfully !!'
            );
        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }

}
