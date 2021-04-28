<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    use HasFactory;
    public $table ="Calificacion ";
    protected $fillable = [
        'CalificacionID' , 'CalificacionHotel','Comentario '

    ];
    
    /// pertenece a calificacionhotle

    public function hotel(){
        return $this-> belongsTo(Hotel::class, 'id');
    }
}
