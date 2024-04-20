<?php

namespace App\Http\Controllers;

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
}
