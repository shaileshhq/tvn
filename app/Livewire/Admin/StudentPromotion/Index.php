<?php

namespace App\Livewire\Admin\StudentPromotion;

use Livewire\Component;
use App\Models\StudentPromotion;

class Index extends Component
{
    public $page_title = 'Student Promotion';

    public function render()
    {
        $list = StudentPromotion::paginate(getPaginate());
        return view('livewire.admin.student-promotion.index', compact('list'))->layout('admin.layouts.app');
    }
}
