<?php

namespace App\Livewire\Admin\CbseAffiliate;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CbseAffiliate;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $page_title = 'CBSE Affiliate';

    public function render()
    {
        $list = CbseAffiliate::paginate(getPaginate());
        return view('livewire.admin.cbse-affiliate.index', compact('list'))->layout('admin.layouts.app');
    }

    public function updateStatus($id)
    {
        try {

            $data = CbseAffiliate::find($id);
            $data->status = $data->status ? 0 : 1;
            $data->save();
            $this->dispatch('alert',
                type: $data->status==1 ? 'success' : 'error',
                message: $data->status== 1 ? 'Status active successfully !!': 'Status inactive successfully !!'
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
            CbseAffiliate::destroy($id);
            $this->dispatch('alert',
                type: 'success',
                message: 'Data deleted successfully !!'
            );
        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }
}
