<?php

namespace App\Livewire\Admin\AssignFee;

use Livewire\Component;
use App\Models\AssignFee;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $page_title = 'Assign Fees';
    public function render()
    {
        $list = AssignFee::paginate(getPaginate());
        return view('livewire.admin.assign-fee.index', compact('list'))->layout('admin.layouts.app');
    }
}
