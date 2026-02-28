<?php

namespace App\Livewire\Admin\Document;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\SchoolDocument;

class Create extends Component
{
    use WithFileUploads;
    public $page_title = 'Add School Document';
    public $hidden_id, $title, $category = 'documents', $document, $show_image;

    public function render()
    {
        return view('livewire.admin.document.form')->layout('admin.layouts.app');
    }
    public function save()
    {
        $this->validate([
            'title' => 'required',
            'category' => 'required',
            'document' => 'required|mimes:jpeg,jpg,png,xlsx,pdf'
        ]);
        try {

            $data = new SchoolDocument;
            $data->title = $this->title;
            $data->category = $this->category;

            $document = Str::slug($this->title).'.'.$this->document->extension();
            $data->document = $this->document->storeAs('document', $document, 'public');
            $data->save();

            session()->flash('success', 'School Document created successfully !!');
            return $this->redirectRoute('admin.document.index', navigate: true);

         } catch (\Throwable $th) {

            $this->dispatch('alert',
                 type: 'error',
                 message: 'Somthing went worng !!'
             );

         }
    }
}
