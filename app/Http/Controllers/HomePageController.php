<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $data = array('title' => 'Homepage');
        return view('homepage.index',$data);
    }

    public function about(){
        $data = array('title' => 'About Us');
        return view('homepage.about',$data);
    }

    public function contact(){
        $data = array('title' => 'Contact');
        return view('homepage.contact',$data);
    }

    public function category(){
        $data = array('title' => 'Category Product');
        return view('homepage.category',$data);
    }
}
