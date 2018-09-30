<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    public function curso(){
        return $this->belongsTo(Curso::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
