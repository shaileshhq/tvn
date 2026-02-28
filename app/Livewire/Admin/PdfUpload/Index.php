<?php

namespace App\Livewire\Admin\PdfUpload;

use Livewire\Component;
use App\Models\PDFUpload;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $page_title = 'PDF List';

    public function render()
    {
        $list = PDFUpload::paginate(getPaginate());
        return view('livewire.admin.pdf-upload.index', compact('list'))->layout('admin.layouts.app');
    }

    public function updateStatus($id)
    {
        try {

            $data = PDFUpload::find($id);
            $data->status = $data->status ? 0 : 1;
            $data->save();
            $this->dispatch('alert',
                type: $data->status==1 ? 'success' : 'error',
                message: $data->status== 1 ? 'PDF Show active successfully !!': 'PDF Show inactive successfully !!'
            );

        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }
}
