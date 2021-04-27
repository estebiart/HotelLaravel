<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    public $table ="Hotel";
    protected $fillable = [
        'HoteliD', 'HotelName', 'IDCategoria ', 'Precio '

    ];
    public $timesatamps =false;
}
