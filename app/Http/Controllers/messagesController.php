<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class messagesController extends Controller
{
    public function submit(Request $request){
      $rules = [
        'name' => 'required|min:2|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|digits:10',
        'message' => 'required|min:25|max:1024'
      ];

      $messages = [
          'required' => 'The :attribute field is required.',
      ];

      $validator = Validator::make($request->all(), $rules, $messages)->validate();;


      return "success";
    }
}
