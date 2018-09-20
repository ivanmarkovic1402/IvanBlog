<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Ivan-Blog';
        return view('pages.index', compact('title'));
        //return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array('title' => 'Services','services'=>['Programing', 'Web development', 'SEO', 'Database','UX/UI']);
        return view('pages.services')->with($data);
    }
}
