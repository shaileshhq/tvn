<?php

namespace App\Livewire\Admin\Fees;

use App\Models\Fees;
use Livewire\Component;

class Create extends Component
{
    public $page_title = 'Add fees';
    public $hidden_id, $fee_name, $ammount;

    public function render()
    {
        return view('livewire.admin.fees.form')->layout('admin.layouts.app');
    }
    public function save()
    {
        $this->validate([
            'fee_name' => 'required',
            'ammount' => 'required'
        ]);
        try {
            $data = new Fees;
            $data->fee_name = $this->fee_name;
            $data->ammount = $this->ammount;
            $data->save();

            session()->flash('success', 'fees created successfully !!');
            return $this->redirectRoute('admin.fees.index', navigate: true);

        } catch (\Throwable $th) {

            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );

        }
    }

}
