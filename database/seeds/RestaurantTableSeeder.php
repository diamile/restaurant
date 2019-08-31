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
        for ($i = 1; $i < 4; $i++) {
            DB::table('restaurants')->insert(['name' => 'Restaurant ' . $i]);
        }  


		DB::table('days')->insert([
		    ['name' => 'Lundi' ],
		    ['name' => 'Mardi' ],
		    ['name' => 'Mercredi' ],
		    ['name' => 'Jeudi' ],
		    ['name' => 'Vendredi' ],
		    ['name' => 'Samedi' ],
		    ['name' => 'Dimanche' ],
        ]);
        
        DB::table('horaires')->insert([
		    ['start_time' => '9:00','end_time'=>'12:00','restart_time'=>'','reend_time'=>'','restaurant_id'=>1,'day_id'=>1,'state'=>'ouvert'],
            ['start_time' => '9:00','end_time'=>'12:00','restart_time'=>'16:00','reend_time'=>'22:00','restaurant_id'=>1,'day_id'=>2,'state'=>'ouvert'],
            ['start_time' => '9:00','end_time'=>'12:00','restart_time'=>'16:00','reend_time'=>'22:00','restaurant_id'=>1,'day_id'=>3,'state'=>'ouvert'],
            ['start_time' => '9:00','end_time'=>'12:00','restart_time'=>'16:00','reend_time'=>'22:00','restaurant_id'=>1,'day_id'=>4,'state'=>'ouvert'],
            ['start_time' => '9:00','end_time'=>'12:00','restart_time'=>'16:00','reend_time'=>'22:00','restaurant_id'=>1,'day_id'=>5,'state'=>'ouvert'],
            ['start_time' => '9:00','end_time'=>'12:00','restart_time'=>'16:00','reend_time'=>'22:00','restaurant_id'=>1,'day_id'=>6,'state'=>'ouvert'],
            ['start_time' => '9:00','end_time'=>'12:00','restart_time'=>'','reend_time'=>'','restaurant_id'=>1,'day_id'=>7,'state'=>'ferme'],



          
           
        ]);
        
        // DB::table('horaires')->insert([
		//     ['start_time' => '9:00','end_time'=>'12:00','restaurant_id'=>2,'day_id'=>1],
        //     ['start_time' => '9:00','end_time'=>'12:00','restaurant_id'=>2,'day_id'=>2],
        //     ['start_time' => '9:00','end_time'=>'12:00','restaurant_id'=>2,'day_id'=>3],
        //     ['start_time' => '9:00','end_time'=>'12:00','restaurant_id'=>2,'day_id'=>4],
        //     ['start_time' => '9:00','end_time'=>'12:00','restaurant_id'=>2,'day_id'=>5],
        //     ['start_time' => '9:00','end_time'=>'12:00','restaurant_id'=>2,'day_id'=>6],
        //     ['start_time' => '9:00','end_time'=>'12:00','restaurant_id'=>2,'day_id'=>7],
           
            
        // ]);
        // DB::table('horaires')->insert([
		//     ['start_time' => '9:00','end_time'=>'12:00','restaurant_id'=>3,'day_id'=>1],
        //     ['start_time' => '9:00','end_time'=>'12:00','restaurant_id'=>3,'day_id'=>2],
        //     ['start_time' => '9:00','end_time'=>'12:00','restaurant_id'=>3,'day_id'=>3],
        //     ['start_time' => '9:00','end_time'=>'12:00','restaurant_id'=>3,'day_id'=>4],
        //     ['start_time' => '9:00','end_time'=>'12:00','restaurant_id'=>3,'day_id'=>5],
        //     ['start_time' => '9:00','end_time'=>'12:00','restaurant_id'=>3,'day_id'=>6],
        //     ['start_time' => '9:00','end_time'=>'12:00','restaurant_id'=>3,'day_id'=>7],
           
            
		// ]);
    }
}
