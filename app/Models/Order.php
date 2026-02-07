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

    public function city() {
        return $this->belongsTo(City::class);
    }
    public function type() {
        return $this->belongsTo(Type::class);
    }
    public function color() {
        return $this->belongsTo(Color::class);
    }
    public function retake_type() {
        return $this->belongsTo(RetakeType::class);
    }
     public function tarif() {
        return $this->belongsTo(Tarif::class);
    }
}
