<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informacion_Personal extends Model
{
    use HasFactory;

    protected $table = 'informacion_personal';
    protected $primaryKey = 'id_informacion_personal';
    protected $fillable = [
        'ap_paterno',
        'ap_materno',
        'nombres',
        'celular',
        'correo'
    ];
}
