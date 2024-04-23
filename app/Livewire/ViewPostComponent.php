<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\PostViewers;
use Livewire\Component;

class ViewPostComponent extends Component
{
    public $posts;
    
    public function mount()
    {
        $this->posts = Post::join('users','users.id','=','posts.user_id')->orderBy('created_at','desc')->get(['users.name','users.id as followedId','posts.*']); //this will fetch all posts and order them desc by date created also join the 
        //user table to see each user with their posts..
    }
    public function addViewers($postId){
        // here we add to post viewers table.. lets create a model and its migration..
        // now let's add post viewers
        $addviewer = new PostViewers;
        $addviewer->user_id = auth()->user()->id;
        $addviewer->post_id = $postId;
        $addviewer->save();
    }
    public function render()
    {
        return view('livewire.view-post-component');
    }
}
