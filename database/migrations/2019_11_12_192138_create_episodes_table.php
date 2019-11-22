<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('season');
            $table->integer('episode_number');
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('release_date');
            $table->integer('series_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('episodes', function (Blueprint $table) {
            $table->foreign('series_id')->references('id')->on('series');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodes');
    }
}
