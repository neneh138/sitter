<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
      public function index()
    {
      $title = 'Welcome';
      return view('homepage.index', compact('title'));
    }




}
