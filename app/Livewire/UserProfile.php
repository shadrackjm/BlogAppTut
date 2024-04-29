<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserProfile extends Component
{
    public $user_data;

    public function mount(){
        $this->user_data = User::join('user_profiles','user_profiles.user_id','=','users.id')
        ->where('user_profiles.user_id',auth()->user()->id)
        ->first();
    }

     public function placeholder(){
        return <<<'HTML'
            <button class="btn btn-primary" type="button" disabled>
                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                <span class="visually-hidden">Loading...</span>
              </button>
        HTML;
    }

    public function render()
    {
        return view('livewire.user-profile');
    }
}
