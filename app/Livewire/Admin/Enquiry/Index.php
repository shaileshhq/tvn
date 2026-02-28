<?php

namespace App\Livewire\Admin\Enquiry;

use App\Models\enquiry;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $page_title = 'Enquiry';
    public function render()
    {
        $list = enquiry::paginate(getPaginate());
        return view('livewire.admin.enquiry.index', compact('list'))->layout('admin.layouts.app');
    }
    public function updateStatus($id)
    {
        try {

            $data = enquiry::find($id);
            $data->status = $data->status ? 0 : 1;
            $data->save();
            $this->dispatch('alert',
                type: $data->status==1 ? 'success' : 'error',
                message: $data->status== 1 ? 'Enquiry active successfully !!': 'Enquiry inactive successfully !!'
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
            enquiry::destroy($id);
            $this->dispatch('alert',
                type: 'success',
                message: 'Enquiry deleted successfully !!'
            );
        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }
}
