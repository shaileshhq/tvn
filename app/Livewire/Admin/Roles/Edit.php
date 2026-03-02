<?php

namespace App\Livewire\Admin\Roles;

use App\Models\Role;
use App\Models\Permission;
use Livewire\Component;

class Edit extends Component
{
    public $page_title = 'Edit Role';

    public $roleId;
    public $name;
    public $selectedPages = [];

    // All available pages in the system
    public function getAvailablePages()
    {
        return [
            'dashboard' => 'Dashboard',
            'web_setup' => 'Website Setup',
            'academic-year' => 'Academic Year',
            'class' => 'Class',
            'student-register' => 'Registration',
            'student-admission' => 'Student Admission',
            'student-promotion' => 'Student Promotion',
            'fees' => 'Fees',
            'concession' => 'Concession',
            'assign-fee' => 'Assign Fee',
            'fee-deposit' => 'Fee Deposit',
            'nursery-to-nine' => 'Nursery to 9th Admission',
            'admission-eleven' => '11th Class Admission',
            'merit-list' => 'Merit List',
            'tc-form' => 'TC Form',
            'tc-upload' => 'TC Upload',
            'document' => 'M Documents',
            'pdf' => 'Important PDF',
            'teacher' => 'Teachers',
            'committee' => 'M Committee',
            'school-time' => 'School Time',
            'transport-rules' => 'Transport Rules',
            'cbse-affiliate' => 'CBSE Affiliate',
            'slider' => 'Slider',
            'news' => 'News',
            'events' => 'Events',
            'gallery' => 'Gallery',
            'enquiry' => 'Enquiry',
            'testimonial' => 'Testimonials',
            'achievement' => 'Student Achievement',
            'roles' => 'Roles & Permissions',
        ];
    }

    public function mount($id)
    {
        $role = Role::findOrFail($id);
        $this->roleId = $role->id;
        $this->name = $role->name;
        $this->selectedPages = $role->permissions()->pluck('page_slug')->toArray();
    }

    public function render()
    {
        $availablePages = $this->getAvailablePages();
        return view('livewire.admin.roles.form', compact('availablePages'))->layout('admin.layouts.app');
    }

    public function selectAll()
    {
        $this->selectedPages = array_keys($this->getAvailablePages());
    }

    public function deselectAll()
    {
        $this->selectedPages = [];
    }

    public function togglePage($slug)
    {
        if (!is_array($this->selectedPages)) {
            $this->selectedPages = [];
        }

        if (in_array($slug, $this->selectedPages)) {
            $this->selectedPages = array_values(array_diff($this->selectedPages, [$slug]));
        } else {
            $this->selectedPages[] = $slug;
        }
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|unique:roles,name,' . $this->roleId,
            'selectedPages' => 'required|array|min:1',
        ], [
            'name.required' => 'Role name is required.',
            'name.unique' => 'This role name already exists.',
            'selectedPages.required' => 'Please select at least one page permission.',
            'selectedPages.min' => 'Please select at least one page permission.',
        ]);

        try {
            $role = Role::findOrFail($this->roleId);
            $role->update(['name' => $this->name]);

            // Delete old permissions and add new ones
            Permission::where('role_id', $role->id)->delete();

            foreach ($this->selectedPages as $pageSlug) {
                Permission::create([
                    'role_id' => $role->id,
                    'page_slug' => $pageSlug,
                ]);
            }

            session()->flash('success', 'Role updated successfully !!');
            return $this->redirectRoute('admin.roles.index', navigate: true);

        } catch (\Throwable $th) {
            $this->dispatch('alert',
                type: 'error',
                message: 'Something went wrong !!'
            );
        }
    }
}
