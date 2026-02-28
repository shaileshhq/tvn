<?php

namespace App\Livewire\Admin\Admissioneleven;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admissioneleven;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $page_title = 'Admission Eleven';
    public function render()
    {
        $list = Admissioneleven::paginate(getPaginate());
        return view('livewire.admin.admissioneleven.index', compact('list'))->layout('admin.layouts.app');
    }
    public function updateStatus($id)
    {
        try {

            $data = Admissioneleven::find($id);
            $data->status = $data->status ? 0 : 1;
            $data->save();
            $this->dispatch('alert',
                type: $data->status==1 ? 'success' : 'error',
                message: $data->status== 1 ? 'Admission eleven active successfully !!': 'Admission eleven inactive successfully !!'
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
            Admissioneleven::destroy($id);
            $this->dispatch('alert',
                type: 'success',
                message: 'Admission eleven deleted successfully !!'
            );
        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }
}
