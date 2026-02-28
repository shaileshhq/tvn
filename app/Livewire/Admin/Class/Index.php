<?php

namespace App\Livewire\Admin\Class;

use Livewire\Component;
use App\Models\ClassMaster;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $page_title = 'Class';

    public function render()
    {
        $list = ClassMaster::paginate(getPaginate());
        return view('livewire.admin.class.index', compact('list'))->layout('admin.layouts.app');
    }
    public function updateStatus($id)
    {
        try {

            $data = ClassMaster::find($id);
            $data->status = $data->status ? 0 : 1;
            $data->save();
            $this->dispatch('alert',
                type: $data->status==1 ? 'success' : 'error',
                message: $data->status== 1 ? 'Class active successfully !!': 'Class inactive successfully !!'
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
            ClassMaster::destroy($id);
            $this->dispatch('alert',
                type: 'success',
                message: 'Class deleted successfully !!'
            );
        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }
}
