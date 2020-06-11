<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function index(){
        return view('static-pages.index');
    }

    public function privacy(){
        return view('static-pages.privacy');
    }

    public function faq(){
        return view('static-pages.faq');
    }
}
