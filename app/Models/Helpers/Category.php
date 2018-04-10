<?php

namespace EICM\Models\Helpers;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $guarded = ['id'];

  //########################### Relacionamentos ########################
  public function articles()
  {
    return $this->hasMany('Article');
  }

  public function entity()
  {
    return $this->belongsTo('Entity');
  }
}
