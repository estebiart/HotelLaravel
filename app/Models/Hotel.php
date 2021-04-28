<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    public $table ="Hoteles";
    protected $fillable = [
        'HoteliD', 'HotelName', 'IDCategoria ', 'Precio '

    ];

    // muchas fotos atraves de foto hotel
    public function fotos()
    {
        return $this->hasManyThrough(Foto::class, FotoHotel::class);
    }

    public $timesatamps =false;
}
