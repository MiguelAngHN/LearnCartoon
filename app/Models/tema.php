<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tema extends Model
{
    use HasFactory;

    // Relacion uno a muchos
    public function seccion(){
        return $this->belongsTo('App\Models\Seccion');
    }

    // relacion uno a muchos con actividad
    public function actividades(){
        return $this->hasMany('App\Models\Actividad');
    }
}
