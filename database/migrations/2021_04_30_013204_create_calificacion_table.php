<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion', function (Blueprint $table) {
            $table->id();
            $table->integer('puntaje');
            $table->string('comentarios');
            $table->unsignedBigInteger('IDHotel')->nullable() ->default(1);
            $table->foreign('IDHotel')->references('id')->on('Hoteles');
            $table->unsignedBigInteger('IDUser')->nullable() ->default(1);
            $table->foreign('IDUser')->references('id')->on('users');
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
        Schema::dropIfExists('calificacion');
    }
}
