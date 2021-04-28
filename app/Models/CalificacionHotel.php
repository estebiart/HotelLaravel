<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalificacionHotel extends Model
{
    use HasFactory;
    public $table ="CalificacionHotel";
    protected $fillable = [
        ' HotelCalificacionID' , ' CalificacionHotelID '

    ];
    
    /// pertenece a calificacionhotle

    public function hotel(){
        return $this-> belongsTo(Hotel::class, 'id');
    }
}
