<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\UserProfile;

class ProfileDetailsEdit extends Component
{
    public $fullName; //the models from the form

    public $about;
    public $company;
    public $job;
    public $country;
    public $address;
    public $phone;
    public $twitter;
    public $facebook;
    public $linkedin;
    public $instagram;

    public function mount($fullName){
        $this->fullName = $fullName;
    }
    public function editUser(){
        $this->validate([
            'fullName' => 'required',
            'about' => 'required',
            'company' => 'required',
            'job' => 'required',
            'country' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $editUser = UserProfile::where('user_id',auth()->user()->id)->update([
            'about' => $this->about,
            'company' => $this->company,
            'job' => $this->job,
            'country' => $this->country,
            'address' => $this->address,
            'phone' => $this->phone,
            'twitter' => $this->twitter,
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'linkedin' => $this->linkedin,
        ]);

        // update full name on users table
        $updateUsersTable = User::where('id',auth()->user()->id)->update([
            'name' => $this->fullName
        ]);
        // this ensure image is updated
        return $this->redirect('/profile',navigate: true);
    }
    public function render()
    {
        return view('livewire.profile-details-edit');
    }
}
