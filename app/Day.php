<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $fillable=['name'];
    
    public function restaurants()
	{
		return $this->belongsToMany('App\Restaurant');
    }
    
    public function horaires()
	{
		return $this->hasMany('App\Day');
	}
}
