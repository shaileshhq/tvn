<?php

namespace App\Livewire\Admin\News;

use App\Models\News;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $page_title = 'Add News';
    public $hidden_id, $title, $short_desc, $description, $tag, $date, $image, $show_image;
    public function render()
    {
        return view('livewire.admin.news.form')->layout('admin.layouts.app');
    }
    public function save()
    {
        $this->validate([
            'title' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
            'tag' => 'required',
            'date' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);
         //try {

            $data = new News;
            $data->title = $this->title;
            $data->slug = Str::slug($this->title);
            $data->short_desc = $this->short_desc;
            $data->description = $this->description;
            $data->tag = $this->tag;
            $data->date = $this->date;
            $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
            $data->image = $this->image->storeAs('news', $image_name, 'public');
            $data->save();

            session()->flash('success', 'News created successfully !!');
            return $this->redirectRoute('admin.news.index', navigate: true);

        //  } catch (\Throwable $th) {

        //     $this->dispatch('alert',
        //          type: 'error',
        //          message: 'Somthing went worng !!'
        //      );

        //  }
    }
}
