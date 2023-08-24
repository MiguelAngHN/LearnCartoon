<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;

    // relacion muchos a muchos
    public function usuarios(){
        return $this->belongsToMany(Usuario::class, 'seccion_usuario');
    }

    // relacion uno a muchos
    public function temas(){
        return $this->hasMany('App\Models\tema');
    }
}
