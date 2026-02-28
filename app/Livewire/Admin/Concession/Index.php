<?php

namespace App\Livewire\Admin\Concession;

use Livewire\Component;
use App\Models\Concession;

class Index extends Component
{
    public $page_title = "Concession";
    public function render()
    {
        $list = Concession::with('getAcademicYear','getClassMaster','getFees')->get();
        return view('livewire.admin.concession.index', compact('list'))->layout('admin.layouts.app');
    }
    public function updateStatus($id)
    {
        try {

            $data = Concession::find($id);
            $data->status = $data->status ? 0 : 1;
            $data->save();
            $this->dispatch('alert',
                type: $data->status==1 ? 'success' : 'error',
                message: $data->status== 1 ? 'Concession data active successfully !!': 'Concession data inactive successfully !!'
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
            Concession::destroy($id);
            $this->dispatch('alert',
                type: 'success',
                message: 'Concession data deleted successfully !!'
            );
        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }
}
