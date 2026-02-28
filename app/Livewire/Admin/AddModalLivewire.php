<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\AddModal;
use Livewire\WithPagination;

class AddModalLivewire extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $page_title = 'Add Modal';

    public function render()
    {
        $list = AddModal::paginate(getPaginate());
        return view('livewire.admin.add-modal.index', compact('list'))->layout('admin.layouts.app');
    }
}
