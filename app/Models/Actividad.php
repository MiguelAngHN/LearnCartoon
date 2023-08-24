<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    // relacion uno a muchos con tema
    public function tema(){
        return $this->belongsTo('App\Models\tema');
    }
}
