<?php

namespace App\Livewire\Admin\PdfUpload;

use Livewire\Component;
use App\Models\PDFUpload;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $page_title = 'Add PDF';
    public $hidden_id, $name, $pdf;

    public function render()
    {
        return view('livewire.admin.pdf-upload.form')->layout('admin.layouts.app');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'pdf' => 'required|mimes:jpeg,jpg,png,xlsx,pdf'
        ]);
        // try {
            $data = new PDFUpload;
            $data->name = $this->name;

            $pdf = Str::slug($this->name).'.'.$this->pdf->extension();
            $data->pdf = $this->pdf->storeAs('pdf', $pdf, 'public');
            $data->save();

            session()->flash('success', 'PDF created successfully !!');
            return $this->redirectRoute('admin.pdf.index', navigate: true);

        //  } catch (\Throwable $th) {

        //     $this->dispatch('alert',
        //          type: 'error',
        //          message: 'Somthing went worng !!'
        //      );

        //  }
    }
}
