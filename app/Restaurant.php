<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{

    protected $fillable=['name'];


    public function horaire()
	{
		return $this->hasMany('App\Horaire');
	}

}
