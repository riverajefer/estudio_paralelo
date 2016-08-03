<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referente extends Model {

    protected $fillable = ['referentes'];

    public function users(){

    	return $this->belongsToMany('App\Models\User', 'referente_user', 'referente_id', 'user_id')->withTimestamps();

    }

}