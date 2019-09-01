<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Horaire;
use App\Day;
use DB;

class RestaurantController extends Controller
{
    public function index()
    {
     $restaurants=Restaurant::all();
     $horaires=Horaire::all();
     $days=Day::all();
    
    

    // $question15 = DB::table('horaires')
    // ->join('restaurants', 'horaires.restaurant_id', '=', 'restaurants.id')
    // ->select('horaires.*')->where('restaurants.name','Restaurant 1');
    
    
    
      return view('pages.restaurant',compact('horaires','restaurants'));
    }
}
