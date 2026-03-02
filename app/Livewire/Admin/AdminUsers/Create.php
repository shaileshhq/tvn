<?php

namespace App\Livewire\Admin\AdminUsers;

use App\Models\Admin;
use App\Models\Role;
use Livewire\Component;

class Create extends Component
{
    public $page_title = 'Add Admin User';

    public $name, $email, $phone, $password, $password_confirmation, $role_id;

    public function render()
    {
        $roles = Role::where('status', 1)->get();
        return view('livewire.admin.admin-users.form', compact('roles'))->layout('admin.layouts.app');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'phone' => 'nullable|string|max:15',
            'password' => 'required|min:8|confirmed',
            'role_id' => 'required|exists:roles,id',
        ], [
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'email.unique' => 'This email is already in use.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters.',
            'password.confirmed' => 'Passwords do not match.',
            'role_id.required' => 'Please select a role.',
        ]);

        try {
            $admin = new Admin;
            $admin->name = $this->name;
            $admin->email = $this->email;
            $admin->phone = $this->phone;
            $admin->password = bcrypt($this->password);
            $admin->role_id = $this->role_id;
            $admin->save();

            session()->flash('success', 'Admin user created successfully !!');
            return $this->redirectRoute('admin.admin-users.index', navigate: true);

        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Something went wrong !!'
            );
        }
    }
}
