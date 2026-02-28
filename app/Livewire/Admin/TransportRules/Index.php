<?php

namespace App\Livewire\Admin\TransportRules;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\TransportRules;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $page_title = 'Transport Rules';

    public function render()
    {
        $list = TransportRules::paginate(getPaginate());
        return view('livewire.admin.transport-rules.index', compact('list'))->layout('admin.layouts.app');
    }

    public function updateStatus($id)
    {
        try {

            $data = TransportRules::find($id);
            $data->status = $data->status ? 0 : 1;
            $data->save();
            $this->dispatch('alert',
                type: $data->status==1 ? 'success' : 'error',
                message: $data->status== 1 ? 'Rules active successfully !!': 'Rules inactive successfully !!'
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
            TransportRules::destroy($id);
            $this->dispatch('alert',
                type: 'success',
                message: 'Rules deleted successfully !!'
            );
        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }
}
