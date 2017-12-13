<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
  
  
  public function addProject(Request $request)
  {
      $rules = [
        'name' => 'required|min:2|max:255',
        'image' => 'required|file|image',
        'description' => 'required|min:10|max:2048'
      ];

      $messages = [
          'required' => 'The :attribute field is required.',
      ];

      $validator = Validator::make($request->all(), $rules, $messages)->validate();;


      // Create a new messages
      $project = new Project;
      $project->name = $request->input('name');
      $file = $request->file('image');
      $project->image = $file->getClientOriginalName();
      $project->description = $request->input('description');

      // Move Uploaded File
      $destinationPath = "images/uploads";
      $file->move($destinationPath,$file->getClientOriginalName());

      // Save project
      $project->save();

      // Redirect
      return redirect('/')->with('messageSendSucess', 'Message Sent');
  }


  public function getProjects()
  {
    $projects = $this->allProjects();
    return view('projects')->with('projects', $projects);
  }

  public function getProjectsJSON()
  {
    return $this->allProjects();
  }

  private function allProjects()
  {
    //query for all projects
    return Project::with('languages')->
                    with('frameworks')->
                    with('cms')->
                    get();
  }
}
