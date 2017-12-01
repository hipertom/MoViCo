<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
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
