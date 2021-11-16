<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnica_Coaching extends Model
{
    use HasFactory;

    protected $table = 'tecnica_coaching';
    protected $primaryKey = 'id_tecnica_coaching';
    protected $fillable = [
        'nombre_tecnica',
        'descripcion_tecnica'
    ];
}
