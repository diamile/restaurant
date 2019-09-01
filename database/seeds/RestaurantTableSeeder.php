<?php

use Illuminate\Database\Seeder;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i = 1; $i < 4; $i++) {
        //     DB::table('restaurants')->insert(['name' => 'Restaurant ' . $i]);
        // }  


        //creation du nom de mon restaurant
        DB::table('restaurants')->insert(['name'=>'Restaurant aux vieux de la vieille lille']);

     //alimentation de la table days via les seeders
		DB::table('days')->insert([
		    ['name' => 'Lundi' ],
		    ['name' => 'Mardi' ],
		    ['name' => 'Mercredi' ],
		    ['name' => 'Jeudi' ],
		    ['name' => 'Vendredi' ],
		    ['name' => 'Samedi' ],
		    ['name' => 'Dimanche' ],
        ]);
        
        //insertion des donneés dans mon seeder
        DB::table('horaires')->insert([
		    ['start_time' => '18:30','end_time'=>'20:00','restart_time'=>'','reend_time'=>'','restaurant_id'=>1,'day_id'=>1,'state'=>'ouvert'],
            ['start_time' => '12:00','end_time'=>'14:00','restart_time'=>'18:30','reend_time'=>'20:00','restaurant_id'=>1,'day_id'=>2,'state'=>'ouvert'],
            ['start_time' => '12:00','end_time'=>'14:00','restart_time'=>'18:30','reend_time'=>'20:00','restaurant_id'=>1,'day_id'=>3,'state'=>'ouvert'],
            ['start_time' => '12:00','end_time'=>'14:00','restart_time'=>'18:30','reend_time'=>'20:00','restaurant_id'=>1,'day_id'=>2,'state'=>'ouvert'],
            ['start_time' => '12:00','end_time'=>'14:00','restart_time'=>'18:30','reend_time'=>'20:00','restaurant_id'=>1,'day_id'=>3,'state'=>'ouvert'],
            ['start_time' => '12:00','end_time'=>'14:00','restart_time'=>'18:30','reend_time'=>'20:00','restaurant_id'=>1,'day_id'=>3,'state'=>'ouvert'],
            ['start_time' => '9:00','end_time'=>'12:00','restart_time'=>'','reend_time'=>'','restaurant_id'=>1,'day_id'=>7,'state'=>'ferme'],
 
        ]);
        
        
    }
}
