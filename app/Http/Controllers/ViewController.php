<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function getHome()
    {
      $data = [];
      $file = fopen("https://docs.google.com/spreadsheets/d/e/2PACX-1vQe1oi3RnL0xjPxn3DILE_RGFw50_XCqN-4PWtZXhuJqzarj9uiKQWnMV-qegGD6ByT5y17zNY6UqFd/pub?gid=1863670052&single=true&output=csv", 'r');
      $ganum = (fgetcsv($file));

      $data['file'] = $ganum[0];
      return view('home', $data);
    }

    public function getAbout()
    {
      return view('about');
    }

    public function getContact()
    {
      return view('contact');
    }

}
