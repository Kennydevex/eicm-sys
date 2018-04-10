<?php

namespace EICM\Models\Helpers;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
  protected $guarded = ['id'];

  /**
  * Indicates if the model should be timestamped.
  *
  * @var bool
  */
  public $timestamps = false;

  //########################### Relacionamentos ########################
  public function categories()
  {
    return $this->hasMany('Category');
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
