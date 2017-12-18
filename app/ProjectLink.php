<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectLink extends Model
{
  protected $fillable = ['url', 'type_id'];

  public function type()
  {
    return $this->hasOne(LinkType::class, 'id', 'type_id');
  }

}
