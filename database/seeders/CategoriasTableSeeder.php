<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        return \DB::table('categorias')->insert([
            [
                "CategoriaDescripcion" => "1 estrella",

            ],
            [
                "CategoriaDescripcion" => "2 estrellas",

            ],
            [
                "CategoriaDescripcion" => "3 estrellas",

            ],
            [
                "CategoriaDescripcion" => "4 estrellas",

            ],
            [
                "CategoriaDescripcion" => "5 estrellas",

            ]
  
        ]);
        return \DB::table('user')->insert([
            [
                "name" => "rot",
                "email" => "estrellas@gmai.com",
                "password" => "password",

            ]
  
        ]);
        return \DB::table('hoteles')->insert([
            [
                "HotelName" => "hotel principal",
                "Precio" => "20.0000"

            ]
  
        ]);
        return \DB::table('calificacion')->insert([
            [
                "puntaje" => "1",
                "Comentarios" => "20.0000",
                "IDHotel" => "1",
                

            ]
  
        ]);
    }
}
