<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Post;


class DashboardController extends Controller
{

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard')->with('posts', $user->posts);
    }

    public function myprofile()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $post = Post::where('user_id',$user->id)->get();
        // return view('/myprofile')->with('user',$user);
        return view('/myprofile', compact('user','post'));
    }

}