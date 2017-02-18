<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\PageContents;
use App\Posts;

class HomeController extends Controller
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
        $categories = Categories::All();
        $posts = Posts::where('title', 'Home')->get();

        return view('welcome')->with('categories' , $categories)->with('posts', $posts);
    }


    public function pages(){

        $categories = Categories::All();
        $pagecontents = PageContents::where('active', 1)->get();
        return view('pages.pages')->with('categories' , $categories)->with('pagecontents', $pagecontents);
    }

    public function about(){

        $posts = Posts::where('title', 'About')->get();
        $categories = Categories::All();
        return view('pages.about')->with('categories' , $categories)->with('posts', $posts);
    }



    public function contact(){
        $posts = Posts::where('title', 'Contact')->get();
        $categories = Categories::All();
        return view('pages.contact')->with('categories' , $categories)->with('posts', $posts);
    }

    public function faq(){
        $posts = Posts::where('title', 'FAQ')->get();
        $categories = Categories::All();
        return view('pages.faq')->with('categories' , $categories)->with('posts', $posts);
    }
}
