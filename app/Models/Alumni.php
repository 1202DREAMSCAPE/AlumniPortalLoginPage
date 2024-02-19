<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Alumni extends Authenticatable
{
   protected $table = 'alumni';

   public function user()
   {
       return $this->hasOne('App\Models\User');
   }
}
