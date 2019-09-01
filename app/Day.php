<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
	//les variable de $fillabel
    protected $fillable=['name'];
	
	//relations entre le mode Day et le model  Restaurant
    public function restaurants()
	{
		return $this->belongsToMany('App\Restaurant');
    }
	
	//relations entre le model Day et le model Horaire
    public function horaires()
	{
		return $this->hasMany('App\Day');
	}
}
