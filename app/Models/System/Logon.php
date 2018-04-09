<?php

namespace EICM\Models\System;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Logon extends Authenticatable
{
  use Notifiable;

  /**
  * The table associated with the model.
  *
  * @var string
  */
  protected $table = 'logons';

  /**
  * Indicates if the model should be timestamped.
  *
  * @var bool
  */
  public $timestamps = false;
}
