<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function getHome()
    {
      return view('home');
    }

    public function getAbout()
    {
      return view('home');
    }

    public function getContact()
    {
      return view('home');
    }
    
}
