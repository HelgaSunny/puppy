<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = ['pet_nickname','pet_type','pet_about','user_id'];

    public function user(){
        return $this -> belongsTo('App\User');
    }
}
