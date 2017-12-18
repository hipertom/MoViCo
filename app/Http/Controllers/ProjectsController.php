<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Project;
use App\LinkType;
use App\ProjectLink;

class ProjectsController extends Controller
{
  
  
  public function __construct() {
    $this->middleware('auth');
  }
  
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

    // Create object
    $project = new Project;

    // Save basic data
    $project->name = $request->input('name');
    $file = $request->file('image');
    $project->image = $file->getClientOriginalName();
    $project->description = $request->input('description');

    // Move Uploaded File
    $destinationPath = "images/uploads";
    $file->move($destinationPath,$file->getClientOriginalName());

    // Save project to database
    $project->save();

    // Save links
    $links = array();
    $possibleLinkTypes = DB::table('link_types')->get();
    foreach ($possibleLinkTypes as $key => $linkType) {
      $name = $linkType->id . "-linktype";
      if( !empty($request->$name) ){
        array_push($links, ['url' => $request->$name, 'type_id' => $linkType->id] );
      }
    }
    $project->links()->createMany($links);

    // Redirect
    return redirect('/')->with('messageSendSucess', "saved id =". $project->id);
  }


  public function getProjects()
  {
    $projects = $this->allProjects();
    $linkTypes = LinkType::get();
    

    return view('projects')->with('projects', $projects)->with('linkTypes', $linkTypes);
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
                    with('links')->
                    get();
  }
}
