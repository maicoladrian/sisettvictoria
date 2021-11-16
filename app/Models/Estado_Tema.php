<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado_Tema extends Model
{
    use HasFactory;

    protected $table = 'estado_tema';
    protected $primaryKey = 'id_estado_tema';
    protected $fillable = [
        'descripcion_estado_tema'
    ];
}
