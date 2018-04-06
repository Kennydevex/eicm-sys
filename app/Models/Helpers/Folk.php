<?php

namespace EICM\Models\Helpers;

use Illuminate\Database\Eloquent\Model;

class Folk extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'first_name',
      'last_name',
      'identification_card',
      'gender',
      'email',
      'phone_number',
  ];
  /**
   * Indicates if the model should be timestamped.
   *
   * @var bool
   */
   public $timestamps = false;



   public function user()
   {
       return $this->hasOne('User');
   }

}
