<?php

namespace App\Livewire\Admin\Document;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\SchoolDocument;

class Edit extends Component
{
    use WithFileUploads;
    public $page_title = 'Edit Document';
    public $hidden_id, $title, $category, $document, $show_image;

    public function mount($id)
    {
        $this->hidden_id = $id;
        $data = SchoolDocument::findOrFail($id);
        $this->title = $data->title;
        $this->category = $data->category;
        $this->show_image = $data->document;
    }

    public function render()
    {
        return view('livewire.admin.document.form')->layout('admin.layouts.app');
    }
    public function update()
    {
        $this->validate([
            'title' => 'required',
            'category' => 'required',
            'document' => 'nullable|mimes:jpeg,jpg,png,xlsx,pdf'
        ]);

            $data = SchoolDocument::find($this->hidden_id);
            $data->title = $this->title;
            $data->category = $this->category;
            if($this->document){
                $document = Str::slug($this->title).'.'.$this->document->extension();
                $data->document = $this->document->storeAs('document', $document, 'public');
            }
            $data->save();

        session()->flash('success', 'Document update successfully !!');
        return $this->redirectRoute('admin.document.index', navigate: true);
    }
}
