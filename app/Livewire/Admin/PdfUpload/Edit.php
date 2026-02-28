<?php

namespace App\Livewire\Admin\PdfUpload;

use Livewire\Component;
use App\Models\PDFUpload;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $page_title = 'Edit PDF';
    public $hidden_id, $name, $pdf, $show_image;

    public function mount($id)
    {
        $this->hidden_id = $id;
        $data = PDFUpload::findOrFail($id);
        $this->name = $data->name;
        $this->show_image = $data->pdf;
    }
    public function render()
    {
        return view('livewire.admin.pdf-upload.form')->layout('admin.layouts.app');
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'pdf' => 'nullable|mimes:jpeg,jpg,png,xlsx,pdf'
        ]);

            $data = PDFUpload::find($this->hidden_id);
            $data->name = $this->name;
            if($this->pdf){
                $pdf = Str::slug($this->name).'.'.$this->pdf->extension();
                $data->pdf = $this->pdf->storeAs('pdf', $pdf, 'public');
            }
            $data->save();

        session()->flash('success', 'PDF update successfully !!');
        return $this->redirectRoute('admin.pdf.index', navigate: true);
    }
}
