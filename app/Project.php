<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function languages()  // fetch all languages associated with the project
    {
      return $this->hasMany(Language::class);
    }

    public function frameworks() // fetch all frameworks associated with the project
    {
      return $this->hasMany(Framework::class);
    }

    public function cms() // fetch all cms's associated with the project
    {
      return $this->hasMany(Cms::class);
    }

    public function links() // fetch all links associated with the project
    {
      return $this->hasMany(Link::class);
    }

}
