<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function seccions(){
        return $this->belongsToMany(Seccion::class, 'seccion_usuario');
    }
}
