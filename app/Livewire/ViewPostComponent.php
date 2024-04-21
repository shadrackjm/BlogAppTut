<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class ViewPostComponent extends Component
{
    public $posts;
    
    public function mount()
    {
        $this->posts = Post::join('users','users.id','=','posts.user_id')->orderBy('created_at','desc')->get(['users.name','posts.*']); //this will fetch all posts and order them desc by date created also join the 
        //user table to see each user with their posts..
    }
    public function render()
    {
        return view('livewire.view-post-component');
    }
}
