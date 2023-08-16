<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seccion extends Model
{
    use HasFactory;
// relacion de uno a muchos
    public function temas(){
        return $this->hasMany('App\Models\tema');
    }

// relacion muchos a muchos
    public function usuarios(){
        return $this->belongsToMany(usuario::class, 'seccion_usuario');
    }
}
