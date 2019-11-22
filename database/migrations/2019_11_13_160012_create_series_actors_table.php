<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series_actors', function (Blueprint $table) {
            $table->integer('series_id')->unsigned();
            $table->foreign('series_id')->references('id')
                  ->on('series')->onDelete('cascade');

            $table->integer('actors_id')->unsigned();
            $table->foreign('actors_id')->references('id')
                ->on('actors')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series_actors');
    }
}
