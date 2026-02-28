<?php

namespace App\Livewire\Admin\WebsiteSetup;

use Livewire\Component;
use App\Models\WebsiteSetup;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public $page_title = 'Website Setup';
    public $logo, $favicon;
    public $contact_number, $address, $whats_app_number, $email, $principal_name, $principal_content, $principal_image, $director_image, $director_name, $director_content, $modal_image, $modal_text, $modal_url, $end_date;
    public $facebook, $twitter, $instagram, $youtube, $linkedin;

    public function mount()
    {
        $this->logo = WebsiteSetup::where('name', 'logo')->value('value');
        $this->favicon = WebsiteSetup::where('name', 'favicon')->value('value');
        $this->contact_number = WebsiteSetup::where('name', 'contact_number')->value('value');
        $this->address = WebsiteSetup::where('name', 'address')->value('value');
        $this->whats_app_number = WebsiteSetup::where('name', 'whats_app_number')->value('value');
        $this->email = WebsiteSetup::where('name', 'email')->value('value');
        $this->principal_name = WebsiteSetup::where('name', 'principal_name')->value('value');
        $this->principal_content = WebsiteSetup::where('name', 'principal_content')->value('value');
        $this->principal_image = WebsiteSetup::where('name','principal_image')->value('value');
        $this->director_name = WebsiteSetup::where('name', 'director_name')->value('value');
        $this->director_content = WebsiteSetup::where('name', 'director_content')->value('value');
        $this->director_image = WebsiteSetup::where('name','director_image')->value('value');
        $this->modal_image = WebsiteSetup::where('name','modal_image')->value('value');
        $this->modal_text = WebsiteSetup::where('name','modal_text')->value('value');
        $this->modal_url = WebsiteSetup::where('name','modal_url')->value('value');
        $this->end_date = WebsiteSetup::where('name','end_date')->value('value');
        $this->facebook = WebsiteSetup::where('name', 'facebook')->value('value');
        $this->twitter = WebsiteSetup::where('name', 'twitter')->value('value');
        $this->instagram = WebsiteSetup::where('name', 'instagram')->value('value');
        $this->youtube = WebsiteSetup::where('name', 'youtube')->value('value');
        $this->linkedin = WebsiteSetup::where('name', 'linkedin')->value('value');
    }

    public function save()
    {
        try {
            if ($this->logo instanceof \Illuminate\Http\UploadedFile) {
                $logoFileName = time() . '.' . $this->logo->getClientOriginalExtension();
                $this->logo->storeAs('website_setup', $logoFileName, 'public');
                WebsiteSetup::updateOrCreate(['name' => 'logo'], ['value' => $logoFileName]);
            }

            if ($this->favicon instanceof \Illuminate\Http\UploadedFile) {
                $faviconFileName = time() . '.' . $this->favicon->getClientOriginalExtension();
                $this->favicon->storeAs('website_setup', $faviconFileName, 'public');
                WebsiteSetup::updateOrCreate(['name' => 'favicon'], ['value' => $faviconFileName]);
            }
            if ($this->modal_image instanceof \Illuminate\Http\UploadedFile) {
                $modalImageFileName = time() . '.' . $this->modal_image->getClientOriginalExtension();
                $this->modal_image->storeAs('website_setup', $modalImageFileName, 'public');
                WebsiteSetup::updateOrCreate(['name' => 'modal_image'], ['value' => $modalImageFileName]);
            }
            if ($this->principal_image instanceof \Illuminate\Http\UploadedFile) {
                $principalImageFileName = time() . '.' . $this->principal_image->getClientOriginalExtension();
                $this->principal_image->storeAs('website_setup', $principalImageFileName, 'public');
                WebsiteSetup::updateOrCreate(['name' => 'principal_image'], ['value' => $principalImageFileName]);
            }
            if ($this->director_image instanceof \Illuminate\Http\UploadedFile) {
                $directorImageFileName = time() . '.' . $this->director_image->getClientOriginalExtension();
                $this->director_image->storeAs('website_setup', $directorImageFileName, 'public');
                WebsiteSetup::updateOrCreate(['name' => 'director_image'], ['value' => $directorImageFileName]);
            }

            $fields = ['contact_number', 'address', 'whats_app_number', 'email', 'principal_name', 'principal_content', 'director_name', 'director_content', 'modal_text', 'modal_url', 'end_date', 'facebook', 'twitter', 'instagram', 'youtube', 'linkedin'];
            foreach ($fields as $field) {
                if (filled($this->$field)) {
                    WebsiteSetup::updateOrCreate(['name' => $field], ['value' => $this->$field]);
                }
            }
            session()->flash('success', 'Website setup updated successfully.');
            return $this->redirectRoute('admin.web_setup', navigate: true);

        } catch (\Throwable $th) {

            $this->dispatch('alert',
                type: 'error',
                message: 'Somthing went worng !!'
            );
        }
    }

    public function render()
    {
        return view('livewire.admin.website-setup.index')
            ->layout('admin.layouts.app');
    }
}
