<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public function restaurants()
	{
		return $this->belongsToMany('App\Restaurant', 'horaires')->withPivot('id', 'start_time', 'end_time');
	}
}
