<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoHotel extends Model
{
    use HasFactory;
    public $table ="FotoHotel ";
    protected $fillable = [
        'HotelFotoID', 'FotoHotelID '

    ];
    public $timesatamps =false;

}
