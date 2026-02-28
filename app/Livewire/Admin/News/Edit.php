<?php

namespace App\Livewire\Admin\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $page_title = 'Edit News';
    public $hidden_id, $title, $short_desc, $description, $tag, $date, $image, $show_image;

    public function mount($id)
    {
        $this->hidden_id = $id;

        $data = News::findOrFail($id);
        $this->title = $data->title;
        $this->short_desc = $data->short_desc;
        $this->description = $data->description;
        $this->tag = $data->tag;
        $this->date = $data->date;
        $this->show_image = $data->image;
    }
    public function render()
    {
        return view('livewire.admin.news.form')->layout('admin.layouts.app');
    }
    public function update()
    {
        $this->validate([
            'title' => 'required',
            'date' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png'
        ]);

            $data = News::find($this->hidden_id);
            $data->title = $this->title;
            $data->short_desc = $this->short_desc;
            $data->description = $this->description;
            $data->tag = $this->tag;
            $data->date = $this->date;
            if($this->image){
                $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
                $data->image = $this->image->storeAs('news', $image_name, 'public');
            }
            $data->save();

        session()->flash('success', 'News update successfully !!');
        return $this->redirectRoute('admin.news.index', navigate: true);
    }
}
