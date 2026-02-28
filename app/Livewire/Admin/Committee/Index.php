<?php

namespace App\Livewire\Admin\Committee;

use Livewire\Component;
use App\Models\Committee;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $page_title = 'Managing Committee';
    public function render()
    {
        $list = Committee::paginate(getPaginate());
        return view('livewire.admin.committee.index', compact('list'))->layout('admin.layouts.app');
    }
    public function updateStatus($id)
    {
        try {

            $data = Committee::find($id);
            $data->status = $data->status ? 0 : 1;
            $data->save();
            $this->dispatch('alert',
                type: $data->status==1 ? 'success' : 'error',
                message: $data->status== 1 ? 'Managing Committee  data active successfully !!': 'Managing Committee data inactive successfully !!'
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
            Committee::destroy($id);
            $this->dispatch('alert',
                type: 'success',
                message: 'Managing Committee data deleted successfully !!'
            );
        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }
}
