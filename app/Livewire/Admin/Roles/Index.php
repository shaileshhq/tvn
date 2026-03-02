<?php

namespace App\Livewire\Admin\Roles;

use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $page_title = 'Roles & Permissions';

    public function render()
    {
        $list = Role::withCount('admins')->paginate(getPaginate());
        return view('livewire.admin.roles.index', compact('list'))->layout('admin.layouts.app');
    }

    public function updateStatus($id)
    {
        try {
            $data = Role::find($id);
            if ($data->name === 'Super Admin') {
                $this->dispatch('alert',
                    type: 'error',
                    message: 'Cannot change Super Admin status !!'
                );
                return;
            }
            $data->status = $data->status ? 0 : 1;
            $data->save();
            $this->dispatch('alert',
                type: $data->status == 1 ? 'success' : 'error',
                message: $data->status == 1 ? 'Role active successfully !!' : 'Role inactive successfully !!'
            );
        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Something went wrong !!'
            );
        }
    }

    public function delete($id)
    {
        try {
            $role = Role::find($id);
            if ($role->name === 'Super Admin') {
                $this->dispatch('alert',
                    type: 'error',
                    message: 'Cannot delete Super Admin role !!'
                );
                return;
            }
            $role->delete();
            $this->dispatch('alert',
                type: 'success',
                message: 'Role deleted successfully !!'
            );
        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Something went wrong !!'
            );
        }
    }
}
