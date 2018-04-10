<?php

namespace EICM\Models\System;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'name',
    'username',
    'password',
    'status',
    'folk_id',
  ];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];

  //################################ Relacionamentos ####################
  public function folk()
  {
    return $this->belongsTo('Folk');
  }

  public function articles()
  {
    return $this->hasMany('Article');
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
