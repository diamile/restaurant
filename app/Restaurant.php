<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{

    protected $fillable=['name'];

   //creation des relations entre Restaurant et Horaire: un restaurant à plusieurs horaires
    public function horaire()
	{
		return $this->hasMany('App\Horaire');
	}

}
