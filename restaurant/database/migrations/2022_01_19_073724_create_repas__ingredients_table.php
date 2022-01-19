<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepasIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repas__ingredients', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('repas_id')->unsigned()->nullable();
            $table->foreign('repas_id')->references('id')->on('repas');
            $table->bigInteger('ingredients_id')->unsigned()->nullable();
            $table->foreign('ingredients_id')->references('id')->on('ingredients');
            $table->integer('quantite');
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
        Schema::dropIfExists('repas__ingredients');
    }
}
