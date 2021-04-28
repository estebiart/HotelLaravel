<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Foto_hotel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('HotelFotoID');
            $table->foreign('HotelFotoID')->references('id')->on('Hoteles');
            $table->unsignedBigInteger('FotoHotelID');
            $table->foreign('FotoHotelID')->references('id')->on('Foto');
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
        Schema::dropIfExists('Foto_hotel');
    }
}
