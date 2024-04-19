<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
     public function loadHomePage(){
        $logged_user = Auth::user();
        return view('admin.home-page',compact('logged_user'));
    }
}
