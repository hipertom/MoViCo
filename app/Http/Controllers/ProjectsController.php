<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Project;
use App\LinkType;
use App\ProjectLink;
use App\Language;
use App\Framework;
use App\Cms;

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
      'description' => 'required|min:10|max:2048',
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
    $project->description = $request->input('description');
    if (!empty($file)) {
        // Move Uploaded File
        $destinationPath = "images/uploads";
        $file->move($destinationPath,$file->getClientOriginalName());
        // Save image name in project
        $project->image = $file->getClientOriginalName();
    }

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

    // Save languages
    $languages = $request->input('lang');
    // todo: check for id's 
    $project->languages()->attach($languages);

    // Save frameworks
    $frameworks = $request->input('frameworks');
    // todo: check for id's 
    $project->frameworks()->attach($frameworks);

    // Save cmses
    $cmses = $request->input('cmses');
    // todo: check for id's 
    $project->cms()->attach($cmses);
    

    // Redirect
    return redirect('/')->with('errorMessage', "saved id =". $project->id);
  }

  public function deleteProject(int $id)
  {
    $rightPage = url()->previous() == url('projects');
    if (!$rightPage) {
        return redirect('/projects')->with('errorMessage', "You were redirected from the wrong url! Please try again");
    }
    
    $project = Project::find($id);
    if (empty($project)) {
        return redirect('/projects')->with('errorMessage', "Project with ID {$id} does not exist!");
    }
    
    $project->delete();
    
    return redirect('/projects')->with('errorMessage', "Project with ID {$id} deleted!");
  }


  public function getProjects()
  {
    $projects = $this->allProjects();
    $linkTypes = LinkType::get();
    $languages = Language::get();
    $frameworks = Framework::get();
    $cmses = Cms::get();
    

    return view('projects')->with('projects', $projects)
                           ->with('linkTypes', $linkTypes)
                           ->with('languages', $languages)
                           ->with('frameworks', $frameworks)
                           ->with('cmses', $cmses);
  }

  public function getProjectsJSON()
  {
    $json = $this->allProjects();
    return view('projectsJSON')->with('projectsJSON', $json);
  }

  public function getProjectsJSONOutput()
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
