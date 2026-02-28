<?php

namespace App\Livewire\Admin\SchoolTime;

use Livewire\Component;
use App\Models\SchoolTime;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $page_title = 'School Timing';

    public function render()
    {
        $list = SchoolTime::paginate(getPaginate());
        return view('livewire.admin.school-time.index', compact('list'))->layout('admin.layouts.app');
    }

    public function updateStatus($id)
    {
        try {

            $data = SchoolTime::find($id);
            $data->status = $data->status ? 0 : 1;
            $data->save();
            $this->dispatch('alert',
                type: $data->status==1 ? 'success' : 'error',
                message: $data->status== 1 ? 'School Time active successfully !!': 'School Time inactive successfully !!'
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
            SchoolTime::destroy($id);
            $this->dispatch('alert',
                type: 'success',
                message: 'Time deleted successfully !!'
            );
        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }
}
