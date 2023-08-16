<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;

    public function seccions(){
        return $this->belongsToMany(seccion::class, 'seccion_usuario');
    }
}
