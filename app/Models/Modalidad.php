<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    use HasFactory;

    protected $table = 'modalidad';
    protected $primaryKey = 'id_modalidad';
    protected $fillable = [
        'descripcion_modalidad',
        'plazo_modalidad'
    ];
}
