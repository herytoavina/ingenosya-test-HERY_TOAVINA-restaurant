<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepasCreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repas__crees', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('repas_id')->unsigned()->nullable();
            $table->foreign('repas_id')->references('id')->on('repas');
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
        Schema::dropIfExists('repas__crees');
    }
}
