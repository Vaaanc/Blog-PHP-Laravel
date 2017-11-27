<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'VanC';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['SEO', 'Web Design', 'Web Development']
        );
        return view('pages.services')->with($data);
    }
}
