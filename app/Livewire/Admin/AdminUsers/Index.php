<?php

namespace App\Livewire\Admin\AdminUsers;

use App\Models\Admin;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $page_title = 'Admin Users';

    public function render()
    {
        $list = Admin::with('role')->paginate(getPaginate());
        return view('livewire.admin.admin-users.index', compact('list'))->layout('admin.layouts.app');
    }

    public function delete($id)
    {
        try {
            $admin = Admin::find($id);

            // Don't allow deleting yourself
            if ($admin->id === auth()->guard('admin')->id()) {
                $this->dispatch('alert',
                    type: 'error',
                    message: 'You cannot delete yourself !!'
                );
                return;
            }

            $admin->delete();
            $this->dispatch('alert',
                type: 'success',
                message: 'Admin deleted successfully !!'
            );
        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Something went wrong !!'
            );
        }
    }
}
