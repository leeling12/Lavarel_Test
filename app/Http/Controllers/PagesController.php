<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('threads.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function test(){
        return view('pages.test');
    }
}
