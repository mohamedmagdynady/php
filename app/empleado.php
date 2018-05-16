<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    //
   protected $table = 'empleados';
    public $timestamps = false;
    protected $fillable = ['id','name','email','mobile'];

}
