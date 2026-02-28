<?php

namespace App\Livewire\Admin\Events;
use App\Models\Event;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $page_title = 'Add Events';
    public $hidden_id, $title, $short_desc, $description, $tag, $date, $image, $show_image;
    // public $multi_image =[];

    public function render()
    {
        return view('livewire.admin.events.form')->layout('admin.layouts.app');
    }
    public function save()
    {
        $this->validate([
            'title'        => 'required',
            'short_desc'   => 'required',
            'description'  => 'required',
            'tag'          => 'required',
            'date'         => 'required',
            'image'        => 'required|mimes:jpeg,jpg,png',
        ]);
         try {
            $data = new Event;
            $data->title = $this->title;
            $data->slug = Str::slug($this->title);
            $data->short_desc = $this->short_desc;
            $data->description = $this->description;
            $data->tag = $this->tag;
            $data->date = $this->date;
            $image_name = time().'-'.rand(10, 99).'.'.$this->image->extension();
            $data->image = $this->image->storeAs('events', $image_name, 'public');
            $data->save();

            session()->flash('success', 'Events created successfully !!');
            return redirect()->route('admin.events.index');

         } catch (\Throwable $th) {

            $this->dispatchBrowserEvent('alert', [
                'type' => 'error',
                'message' => 'Something went wrong !!'
            ]);

         }
    }
}
