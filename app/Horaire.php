<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horaire extends Model
{
    protected $fillable=['name','restaurant_id','day_id','state'];
   
    public function restaurant()
	{
		return $this->belongsTo('App\Restaurant');
    }
    
    public function day()
	{
		return $this->belongsTo('App\Day');
	}
}
