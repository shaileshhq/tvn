<?php

namespace App\Livewire\Admin\StudentAchievement;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\StudentAchievement;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $page_title = 'Student Achievement List';

    public function render()
    {
        $list = StudentAchievement::paginate(getPaginate());
        return view('livewire.admin.student-achievement.index', compact('list'))->layout('admin.layouts.app');
    }

    public function updateStatus($id)
    {
        try {

            $data = StudentAchievement::find($id);
            $data->status = $data->status ? 0 : 1;
            $data->save();
            $this->dispatch('alert',
                type: $data->status==1 ? 'success' : 'error',
                message: $data->status== 1 ? 'Achievement active successfully !!': 'Achievement inactive successfully !!'
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
            StudentAchievement::destroy($id);
            $this->dispatch('alert',
                type: 'success',
                message: 'Achievement deleted successfully !!'
            );
        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }
}
