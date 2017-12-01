<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $test = "test";

    public function languages()  // fetch all languages associated with the project
    {
      return $this->belongsToMany(Language::class, 'project_languages');
    }

    public function frameworks() // fetch all frameworks associated with the project
    {
      return $this->belongsToMany(Framework::class, 'project_frameworks');
    }

    public function cms() // fetch all cms's associated with the project
    {
      return $this->belongsToMany(Cms::class, 'project_cms');
    }

    /*public function links() // fetch all links associated with the project
    {
      return $this->belongsToMany(Cms::class, 'project_cms');
    }*/

}
