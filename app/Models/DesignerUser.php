<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DesignerUser extends Model {

    public $table = 'designer_users';
    protected $fillable = ['user_id', 'designer_id'];
}