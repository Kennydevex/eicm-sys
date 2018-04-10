<?php

namespace EICM\Models\CMD;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  protected $guarded = ['id'];

  //########################### Relacionamentos ########################
  public function user()
  {
    return $this->belongsTo('User');
  }

  public function category()
  {
    return $this->belongsTo('Category');
  }

  public function images()
  {
    return $this->hasMany('Image');
  }

  public function tags()
  {
    return $this->belongsToMany('Tag');
  }


  // Alterar o retorno da base de dados para valor booleano
  public function getStatusAttribute($value)
  {
    if ($value) {
      return true;
    }
    return false;
  }


}
