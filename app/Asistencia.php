<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    public function curso(){
        return $this->belongsTo(Curso::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
