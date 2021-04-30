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
                "CategoriaDescripcion" => "1 estrellas",

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
    }
}
