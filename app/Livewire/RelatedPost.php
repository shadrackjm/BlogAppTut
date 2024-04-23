<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class RelatedPost extends Component
{
    public $related_posts;
    public function mount($userId){
        $this->related_posts = Post::where('user_id',$userId)
        ->get();
    }
    public function render()
    {
        return view('livewire.related-post');
    }
}
