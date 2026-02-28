<?php

namespace App\Livewire\Admin\Fees;

use App\Models\Fees;
use Livewire\Component;

class Edit extends Component
{
    public $page_title = 'Edit Fees';

    public $hidden_id, $fee_name, $ammount;

    public function mount($id)
    {
        $this->hidden_id = $id;

        $data = Fees::findOrFail($id);
        $this->fee_name = $data->fee_name;
        $this->ammount = $data->ammount;
    }
    public function render()
    {
        return view('livewire.admin.fees.form')->layout('admin.layouts.app');
    }
    public function update()
    {
        $this->validate([
            'fee_name' => 'required',
            'ammount' => 'required'
        ]);

        $data = Fees::find($this->hidden_id);
        $data->fee_name = $this->fee_name;
        $data->ammount = $this->ammount;
        $data->save();

        session()->flash('success', 'Fees update successfully !!');
        return $this->redirectRoute('admin.fees.index', navigate: true);
    }
}
