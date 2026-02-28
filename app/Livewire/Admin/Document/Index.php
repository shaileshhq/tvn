<?php

namespace App\Livewire\Admin\Document;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\SchoolDocument;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $page_title = 'School Document';

    public function render()
    {
        $list = SchoolDocument::paginate(getPaginate());
        return view('livewire.admin.document.index', compact('list'))->layout('admin.layouts.app');
    }
    public function updateStatus($id)
    {
        try {

            $data = SchoolDocument::find($id);
            $data->status = $data->status ? 0 : 1;
            $data->save();
            $this->dispatch('alert',
                type: $data->status==1 ? 'success' : 'error',
                message: $data->status== 1 ? 'School Document active successfully !!': 'School Document inactive successfully !!'
            );

        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }

}
