<?php

namespace App\Livewire\Admin\Events;

use App\Models\Event;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $page_title = 'Edit Events';
    public $hidden_id, $title, $short_desc, $description, $tag, $date, $image, $show_image;

    public function mount($id)
    {
        $this->hidden_id = $id;

        $data = Event::findOrFail($id);
        $this->title = $data->title;
        $this->short_desc = $data->short_desc;
        $this->description = $data->description;
        $this->tag = $data->tag;
        $this->date = $data->date;
        $this->show_image = $data->image;
    }

    public function render()
    {
        return view('livewire.admin.events.form')->layout('admin.layouts.app');
    }
    public function update()
    {
        $this->validate([
            'title' => 'required',
            'short_desc' => 'required',
            'description' => 'required',
            'tag' => 'required',
            'date' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png'
        ]);

            $data = Event::find($this->hidden_id);
            $data->title = $this->title;
            $data->slug = Str::slug($this->title);
            $data->short_desc = $this->short_desc;
            $data->description = $this->description;
            $data->tag = $this->tag;
            $data->date = $this->date;
            if($this->image){
                $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
                $data->image = $this->image->storeAs('events', $image_name, 'public');
            }

            $data->save();

        session()->flash('success', 'Events update successfully !!');
        return $this->redirectRoute('admin.events.index', navigate: true);
    }
}
