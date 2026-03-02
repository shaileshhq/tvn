<?php

namespace App\Livewire\Admin\TcUpload;

use Livewire\Component;
use App\Models\TcUpload;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class Edit extends Component
{
    use WithFileUploads;
    public $page_title = 'Edit TC Upload';
    public $hidden_id, $admission_no, $tc_no, $file, $show_file;

    public function mount($id)
    {
        $this->hidden_id = $id;
        $data = TcUpload::findOrFail($id);
        $this->admission_no = $data->admission_no;
        $this->tc_no = $data->tc_no;
        $this->show_file = $data->file;
    }
    public function render()
    {
        return view('livewire.admin.tc-upload.form')->layout('admin.layouts.app');
    }

    public function update()
    {
        $this->validate([
            'tc_no' => 'required|unique:tc_uploads,tc_no,'.$this->hidden_id,
            'file' => 'nullable|mimes:jpeg,jpg,png,pdf'
        ]);

        $data = TcUpload::find($this->hidden_id);
        $data->admission_no = $this->admission_no;
        $data->tc_no = $this->tc_no;
        if($this->file){
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
        }
        $data->save();

        session()->flash('success', 'TC Upload updated successfully !!');
        return $this->redirectRoute('admin.tc-upload.index', navigate: true);
    }
}
