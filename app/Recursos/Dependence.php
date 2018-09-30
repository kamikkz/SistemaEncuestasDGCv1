<?php

namespace App\Recursos;

use Illuminate\Database\Eloquent\Model;

class Dependence extends Model
{
    protected $table = 'dependences';
    protected $fillable = ['general_management_id','name'];
}
