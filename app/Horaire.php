<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horaire extends Model
{
	//les champs modifiables doivent etre declaré au niveau de $fillable
    protected $fillable=['name','restaurant_id','day_id','state'];
   
	//relation  belongsTo entre le model Horaire et le model Restaurant grace à la fonction restaurant
    public function restaurant()
	{
		return $this->belongsTo('App\Restaurant');
    }
	
	//relation entre le model Horaire et le model Day grace à la fonction day
    public function day()
	{
		return $this->belongsTo('App\Day');
	}
}
