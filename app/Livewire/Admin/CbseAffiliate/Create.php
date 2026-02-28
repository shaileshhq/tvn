<?php

namespace App\Livewire\Admin\CbseAffiliate;

use Livewire\Component;
use App\Models\CbseAffiliate;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $page_title = 'Add CBSE Affiliate';
    public $hidden_id, $title, $description, $document;

    public function render()
    {
        return view('livewire.admin.cbse-affiliate.form')->layout('admin.layouts.app');
    }

    public function save()
    {
        $this->validate([
            'title'         => 'required',
            'description'   => 'required',
            'document'      => 'nullable|mimes:jpeg,jpg,png,xlsx,pdf',
        ]);
         try {

            $data = new CbseAffiliate;
            $data->title = $this->title;
            $data->description = $this->description;
            if($this->document){
                $document = time().'-'.rand(10, 99).'.'.$this->document->extension();
                $data->document = $this->document->storeAs('cbse', $document, 'public');
            }
            $data->save();

            session()->flash('success', 'CBSE Affiliate created successfully !!');
            return $this->redirectRoute('admin.cbse-affiliate.index', navigate: true);

         } catch (\Throwable $th) {

            $this->dispatch('alert',
                 type: 'error',
                 message: 'Somthing went worng !!'
             );

         }
    }
}
