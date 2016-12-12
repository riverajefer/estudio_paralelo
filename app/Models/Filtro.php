<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filtro extends Model
{
    public $table = 'filtro';

    public function espacio(){
        return $this->hasOne('App\Models\Espacio', 'id', 'espacio_id');
    }

    public function estilo(){
        return $this->hasOne('App\Models\Estilo', 'id', 'estilo_id');
    }

    public function color(){
        return $this->hasOne('App\Models\Color', 'id', 'color_id');
    }  

    public function paquete(){
        return $this->hasOne('App\Models\Paquete', 'id', 'paquete_id');
    } 

    public function fecha(){
        return $this->hasOne('App\Models\AgendarCita', 'filtro_id', 'id');
    }            
}
