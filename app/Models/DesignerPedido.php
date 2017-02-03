<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DesignerPedido extends Model {

    public $table = 'designer_pedido';
    protected $fillable = ['user_id', 'pedido_id'];


    public function user(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }


}