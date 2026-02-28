<?php

namespace App\Livewire\Admin\FeeDeposit;

use Livewire\Component;
use App\Models\FeeDeposit;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $page_title = 'Fees Deposit';
    public function render()
    {
        $list = FeeDeposit::paginate(getPaginate());
        return view('livewire.admin.fee-deposit.index', compact('list'))->layout('admin.layouts.app');
    }
}
