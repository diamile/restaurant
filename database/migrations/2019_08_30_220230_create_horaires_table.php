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
            $table->integer('restaurant_id')->unsigned();
            $table->foreign('restaurant_id')->references('id')->on('restaurants')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->integer('day_id')->unsigned();
            $table->foreign('day_id')->references('id')->on('days')
            ->onDelete('restrict')
            ->onUpdate('restrict');

			$table->time('start_time');
			$table->time('end_time');
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
