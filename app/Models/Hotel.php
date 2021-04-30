<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public $table ="Hoteles";
    protected $fillable = [
         'HotelName', 'Precio','IDCategoria','nombre','formato','hotel_id','filtro','tipo'
    ];

    // muchas fotos atraves de foto hotel
    public function fotos()
    {
        return $this->hasManyThrough(Foto::class, FotoHotel::class);
    }
    public function scopeBuscarpor($query, $tipo, $filtro) {
    	if ( ($tipo) && ($filtro) ) {
    		return $query->orderBy($filtro,$tipo);
    	}
    }
    const CREATED_AT = null;
    const UPDATED_AT = null;
    public $timesatamps =false;
}
