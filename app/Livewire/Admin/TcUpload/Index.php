<?php

namespace App\Livewire\Admin\TcUpload;

use Livewire\Component;
use App\Models\TcUpload;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $page_title = 'TC Upload List';
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $list = TcUpload::query()
            ->when($this->search, function($query) {
                $query->where('tc_no', 'like', '%' . $this->search . '%')
                      ->orWhere('admission_no', 'like', '%' . $this->search . '%');
            })
            ->paginate(getPaginate());
        return view('livewire.admin.tc-upload.index', compact('list'))->layout('admin.layouts.app');
    }

    public function updateStatus($id)
    {
        try {

            $data = TcUpload::find($id);
            $data->status = $data->status ? 0 : 1;
            $data->save();
            $this->dispatch('alert',
                type: $data->status==1 ? 'success' : 'error',
                message: $data->status== 1 ? 'TC Upload active successfully !!': 'TC Upload inactive successfully !!'
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
            TcUpload::destroy($id);
            $this->dispatch('alert',
                type: 'success',
                message: 'TC Upload deleted successfully !!'
            );
        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }
}
