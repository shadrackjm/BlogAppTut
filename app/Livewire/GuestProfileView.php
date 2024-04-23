<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class GuestProfileView extends Component
{
    public $user_data;

    public function mount($guestId){
        $this->user_data = User::join('user_profiles','user_profiles.user_id','=','users.id')
        ->where('user_profiles.user_id',$guestId) //here will be the id of the other user/post publisher
        ->first();
    }
    public function render()
    {
        return view('livewire.guest-profile-view');
    }
}
