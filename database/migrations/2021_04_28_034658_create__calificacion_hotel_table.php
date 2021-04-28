<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Calificacion_hotel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('HotelCalificacionID');
            $table->foreign('HotelCalificacionID')->references('id')->on('Hoteles');
            $table->unsignedBigInteger('CalificacionHotelID');
            $table->foreign('CalificacionHotelID')->references('id')->on('Calificacion');
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
        Schema::dropIfExists('Calificacion_hotel');
    }
}
