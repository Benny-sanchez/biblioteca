<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    //para poder consultar en la BD 
    //se canvia la convecion que usa Laravel
    protected $table = 'permiso';
}
