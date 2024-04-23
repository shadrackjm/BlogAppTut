<?php

namespace App\Livewire;

use App\Models\PostViewers;
use Livewire\Component;

class PostViewersCount extends Component
{
    public $post_viewers;
    public function mount($postId){
        // count the viewers of specific post
        $this->post_viewers = PostViewers::where('post_id',$postId)->count();
    }
    public function render()
    {
        return view('livewire.post-viewers-count');
    }
}
