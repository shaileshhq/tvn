<?php

namespace App\Livewire\Admin\Gallery;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $page_title = 'Gallery';
    public function render()
    {
        $list = Gallery::paginate(getPaginate());
        return view('livewire.admin.gallery.index', compact('list'))->layout('admin.layouts.app');
    }
    public function updateStatus($id)
    {
        try {

            $data = Gallery::find($id);
            $data->status = $data->status ? 0 : 1;
            $data->save();
            $this->dispatch('alert',
                type: $data->status==1 ? 'success' : 'error',
                message: $data->status== 1 ? 'Gallery active successfully !!': 'Gallery inactive successfully !!'
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
            Gallery::destroy($id);
            $this->dispatch('alert',
                type: 'success',
                message: 'gallery deleted successfully !!'
            );
        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }
}
