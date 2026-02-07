<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
      protected $fillable = [
        'name',
        'phone',
        'city_id',
        'adress',
        'size',
        'type_id',
        'color_id',
        'retake_type_id',
        'tarif_id'
    ];
   // public $timestamps = false;
}
