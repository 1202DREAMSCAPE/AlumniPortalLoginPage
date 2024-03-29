<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventBooking extends Model
{
   use HasFactory;

   protected $fillable = [
       'EventName',
       'EDate',
       'ELoc',
       'EDesc',
       'TimeStart',
       'TimeEnd'
   ];
}
