<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public $table = 'pedidos';

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

    public function user(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function referentes(){
        return $this->belongsToMany('App\Models\Referente', 'referente_pedido', 'pedido_id', 'referente_id')->withTimestamps();
    }

    public function fotosRefPedido(){
        return $this->hasMany('App\Models\FotosEspaciosPedido');
    }

    public function AgendarCita(){
        return $this->hasOne('App\Models\AgendarCita', 'pedido_id', 'id');
    }

    public function designerPedido(){
        return $this->hasOne('App\Models\DesignerPedido');
    }




}
