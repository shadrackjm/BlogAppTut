<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loadHomePage(){
        $logged_user = Auth::user();
        return view('user.home-page',compact('logged_user'));
    }

    public function loadMyPosts(){
        $logged_user = Auth::user();
        return view('user.my-posts',compact('logged_user'));
    }

    public function loadCreatePost(){
        $logged_user = Auth::user();
        return view('user.create-post',compact('logged_user'));
    }

    public function loadEditPost($post_id){
        $logged_user = Auth::user();
        $post_data = Post::find($post_id);
        return view('user.edit-post',compact('logged_user','post_data'));
    }

    public function loadPostPage($post_id){
        $logged_user = Auth::user();
        $post_data = Post::join('users','users.id','=','posts.user_id')->where('posts.id',$post_id)->first(['users.name','posts.*']);
        return view('user.view-post',compact('logged_user','post_data'));
    }
}
