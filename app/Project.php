<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function links()
    {
      return $this->hasMany(Comment::class);
    }
}
