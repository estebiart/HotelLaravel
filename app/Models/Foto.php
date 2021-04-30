<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    public $table ="Foto";
    protected $fillable = [
        'nombre','formato','hotel_id'

    ];
    public $timesatamps =false;
}
