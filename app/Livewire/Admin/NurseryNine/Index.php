<?php

namespace App\Livewire\Admin\NurseryNine;

use Livewire\Component;
use App\Models\NurseryNine;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $page_title = 'Nursery to Nine';
    public function render()
    {
        $list = NurseryNine::with('getClass')->paginate(getPaginate());
        return view('livewire.admin.nursery-nine.index', compact('list'))->layout('admin.layouts.app');
    }
    public function updateStatus($id)
    {
        try {

            $data = NurseryNine::find($id);
            $data->status = $data->status ? 0 : 1;
            $data->save();
            $this->dispatch('alert',
                type: $data->status==1 ? 'success' : 'error',
                message: $data->status== 1 ? 'nursery to nine active successfully !!': 'nursery to nine inactive successfully !!'
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
            NurseryNine::destroy($id);
            $this->dispatch('alert',
                type: 'success',
                message: 'Nursery to Nine deleted successfully !!'
            );
        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }
}
