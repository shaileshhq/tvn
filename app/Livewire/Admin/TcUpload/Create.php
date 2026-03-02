<?php

namespace App\Livewire\Admin\TcUpload;

use Livewire\Component;
use App\Models\TcUpload;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class Create extends Component
{
    use WithFileUploads;
    public $page_title = 'Add TC Upload';
    public $hidden_id, $admission_no, $tc_no, $file;

    public function render()
    {
        return view('livewire.admin.tc-upload.form')->layout('admin.layouts.app');
    }

    public function save()
    {
        $this->validate([
            'tc_no' => 'required|unique:tc_uploads,tc_no',
            'file' => 'required|mimes:jpeg,jpg,png,pdf'
        ]);
        try {
            $data = new TcUpload;
            $data->admission_no = $this->admission_no;
            $data->tc_no = $this->tc_no;

            // Ensure tc_uploads directory exists in public/storage
            $uploadPath = public_path('storage/tc_uploads');
            if (!File::isDirectory($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            $fileName = Str::slug($this->tc_no).'.'.$this->file->extension();
            $this->file->storeAs('tc_uploads', $fileName, 'public');

            // Also copy to public/storage for direct access
            copy(storage_path('app/public/tc_uploads/'.$fileName), $uploadPath.'/'.$fileName);

            $data->file = 'tc_uploads/'.$fileName;
            $data->save();

            session()->flash('success', 'TC Upload created successfully !!');
            return $this->redirectRoute('admin.tc-upload.index', navigate: true);

        } catch (\Throwable $th) {

            $this->dispatch('alert',
                 type: 'error',
                 message: 'Somthing went worng !!'
             );

        }
    }
}
