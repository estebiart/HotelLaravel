<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Foto', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('formato');
            $table->string('hotel_id');
            $table->string('Url');
            $table->timestamps();
        });
    }
    public function hotel()
    {
    	return $this->belongsTo('App\Hotel');
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Foto');
    }
}
