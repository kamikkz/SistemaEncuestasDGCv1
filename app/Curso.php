<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function usuarios(){
        return $this->belongsToMany(User::class,'curso_users','curso_id','user_id');
    }

}
