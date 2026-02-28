<?php

namespace App\Livewire\Admin\MeritList;

use Livewire\Component;
use App\Models\MeritList;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $page_title = 'Merit List';
    public function render()
    {
        $list = MeritList::paginate(getPaginate());
        return view('livewire.admin.merit-list.index', compact('list'))->layout('admin.layouts.app');
    }
    public function updateStatus($id)
    {
        try {

            $data = MeritList::find($id);
            $data->status = $data->status ? 0 : 1;
            $data->save();
            $this->dispatch('alert',
                type: $data->status==1 ? 'success' : 'error',
                message: $data->status== 1 ? 'Merit List data active successfully !!': 'Merit List data inactive successfully !!'
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
            MeritList::destroy($id);
            $this->dispatch('alert',
                type: 'success',
                message: 'Merit List data deleted successfully !!'
            );
        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }
}
