<?php

namespace App\Livewire;

use App\Models\UserProfile;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileImageEdit extends Component
{
    use WithFileUploads;

    public $existingImage;
    public $image;

    public function uploadImage(){
         $this->validate([
            'image' => 'required',
        ]);
        $photo_name = md5($this->image . microtime()).'.'.$this->image->extension();
        $this->image->storeAs('public/images', $photo_name); //then we store image in this path
        
        $add_photo = UserProfile::where('user_id',auth()->user()->id)->update([
            'image' => $photo_name
        ]);
        // this ensure image is updated
        return $this->redirect('/profile',navigate: true);

    }
    public function render()
    {
        return view('livewire.profile-image-edit');
    }
}
