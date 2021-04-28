<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Categorias', function (Blueprint $table) {
            $table->id();
            $table->string('CategoriaDescripcion');
            $table->timestamps();
     

        });
        Schema::create('Hoteles', function (Blueprint $table) {
            $table->id();
            $table->string('HotelName');
            $table->string('Precio');
            $table->unsignedBigInteger('IDCategoria');
            $table->foreign('IDCategoria')->references('id')->on('Categorias');
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
        Schema::dropIfExists('hoteles');
        Schema::dropIfExists('Categorias');
    }
}

