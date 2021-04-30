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
            $table->id('id_categoria');
            $table->string('CategoriaDescripcion');
            $table->timestamps();
     

        });
        Schema::create('Hoteles', function (Blueprint $table) {
            $table->id('id_hotel');
            $table->string('HotelName');
            $table->integer('Precio');
            $table->unsignedBigInteger('IDCategoria')->nullable() ->default(1);
            $table->foreign('IDCategoria')->references('id_categoria')->on('Categorias');
           
           
           
         

        });
    }
    public function fotos()
    {
        return $this->hasMany('App\Foto');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Hoteles');
        Schema::dropIfExists('Categorias');
    }
}

