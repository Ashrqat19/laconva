<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index()
    {
        $title = 'welcome to laravel';
        return view('welcome')->with('title', $title);
    }
    public function about()
    {
        $title = 'welcome to About Us page';
        return view('pages.about')->with('title', $title);
    }
}
