<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function __construct()
    {
        //some code will go there
    }

    public function home()
    {
        return view('pages.home');
    }

    public function browse()
    {
        $categories = Category::all();
        return view('pages.browse', compact('categories'));
    }

    public function submission()
    {
        return view('pages.submission');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
