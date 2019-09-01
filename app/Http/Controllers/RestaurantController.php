<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Horaire;
use App\Day;
use DB;


//creation de mon controlleur 
class RestaurantController extends Controller
{
    //method index
    public function index()
    {
    //creation des differentes instances gràces aux models

    //1) creation de l'instance restaurant grace au model restaurant
     $restaurants=Restaurant::all();

     //2) creation de l'instance horaire grace au models Horaire
     $horaires=Horaire::all();


     //3)creation de l'instance days à partir du model Day
     $days=Day::all();

     //4)recuperation du nom de restaurant
    $restaurant=$restaurants[0]->name;

      //je return ma vue en lui donnant differentes variables
      return view('pages.restaurant',compact('horaires','restaurants','restaurant'));
    }
}
