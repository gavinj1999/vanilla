<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api;
use App\Categories;

class IndexController extends Controller
{
  public function index()
  {
      $categories = Categories::All();
      $something = 'here';

      return view('welcome')->with('categories' , $categories)->with('something', $something);
  }
}
