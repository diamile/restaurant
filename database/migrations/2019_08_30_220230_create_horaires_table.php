<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horaires', function (Blueprint $table) {
            $table->increments('id');
			$table->timestamps();
            $table->unsignedBigInteger('restaurant_id')->index();
            
            $table->foreign('restaurant_id')->references('id')->on('restaurants');
    

            $table->unsignedBigInteger('day_id')->index();
            $table->foreign('day_id')->references('id')->on('days');
            
			$table->time('start_time');
            $table->time('end_time');

            $table->string('restart_time');
            $table->string('reend_time');

            $table->string('state');
            
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horaires');
    }
}
