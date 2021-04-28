<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    public $table ="Categorias";
    protected $fillable = [
        'CategoriaID ', 'CategoriaDescripcion'

    ];
    
    public function scopeSearchCategory($query,$name)
    {
        return $query->where('name', '=', $name);
    }
    public $timesatamps =false;
}
