<?php

namespace App\Livewire\Admin\TransportRules;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\TransportRules;

class Create extends Component
{
    use WithFileUploads;
    public $page_title = 'Add Transport Rules';
    public $hidden_id, $title, $description, $document;

    public function render()
    {
        return view('livewire.admin.transport-rules.form')->layout('admin.layouts.app');
    }

    public function save()
    {
        $this->validate([
            'title'         => 'required',
            'description'   => 'required',
            'document'      => 'nullable|mimes:jpeg,jpg,png,xlsx,pdf',
        ]);
         try {

            $data = new TransportRules;
            $data->title = $this->title;
            $data->description = $this->description;
            if($this->document){
                $document = time().'-'.rand(10, 99).'.'.$this->document->extension();
                $data->document = $this->document->storeAs('transport', $document, 'public');
            }
            $data->save();

            session()->flash('success', 'Transport Rules created successfully !!');
            return $this->redirectRoute('admin.transport-rules.index', navigate: true);

         } catch (\Throwable $th) {

            $this->dispatch('alert',
                 type: 'error',
                 message: 'Somthing went worng !!'
             );

         }
    }
}
