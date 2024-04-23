<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;

class PostComment extends Component
{
    public $post_id;
    public $comment = ''; //the model from form..
    public $postComments;
    public function mount($postId){
        $this->post_id = $postId;
        $this->postComments = Comment::join('users','users.id','=','comments.user_id')
        ->join('user_profiles','user_profiles.user_id','=','users.id')
        ->where('post_id',$this->post_id)->get(['users.name','comments.*','user_profiles.image']);
    }
    public function leaveComment(){
        $this->validate([
            'comment' => 'required'
        ]);
        // create a comment here
        $createComment = new Comment;
        $createComment->user_id = auth()->user()->id;
        $createComment->post_id = $this->post_id;
        $createComment->comment = $this->comment;
        $createComment->save();

        $this->postComments = Comment::join('users','users.id','=','comments.user_id')
        ->where('post_id',$this->post_id)->get(['users.name','comments.*']);
    }   
    public function render()
    {
        return view('livewire.post-comment');
    }
}
