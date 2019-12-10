<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('network')->nullable();
            $table->text('description')->nullable();
            $table->string('categorie')->nullable();
            $table->string('rating');
            $table->string('creator');
            $table->string('original_title');
            $table->string('original_language');
            $table->string('status');
            $table->string('first_air_date');
            $table->string('last_air_date');
            $table->string('img');

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
        Schema::dropIfExists('series');
    }
}
