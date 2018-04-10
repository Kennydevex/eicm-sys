<?php

namespace EICM\Models\CMD;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

  protected $guarded = ['id'];


  //########################### Relacionamentos ########################
  public function articles()
  {
    return $this->belongsTo('Article');
  }


}
