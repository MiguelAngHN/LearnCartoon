<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;

    public function usuarios(){
        return $this->belongsToMany(Usuario::class, 'seccion_usuario');
    }
}
