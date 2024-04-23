<?php

namespace App\Livewire;

use App\Models\UserProfile;
use Livewire\Component;

class ProfileImage extends Component
{
    public $user_id;
    public $user_image;
    public function mount($userId){
        $this->user_id = $userId;
        $user_data = UserProfile::where('user_id',$this->user_id)
        ->first(['image']);
        // ooh here i assigned the whole object from user profile to user_image which is wrong..
        // now assign image to user_image
        $this->user_image = $user_data->image ?? ''; //if empty
    }
    public function render()
    {
        return view('livewire.profile-image');
    }
}
