<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    private $table="usuario";
    private $fillable=['cedula',  
            'nombres',   
            'apellidos', 
            'telefono',  
            'correo'];
    public $timestamps=false;
  
  
  
}
