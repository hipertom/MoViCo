<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectLink extends Model
{

  public function project()
  {
    return $this->belongsTo(Project::class);
  }

}
