<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acta_Perfil extends Model
{
    use HasFactory;

    protected $table = 'acta_perfil';
    protected $primaryKey = 'id_acta_perfil';
    protected $fillable = [
        'fecha_defensa_acta_perfil',
        'hora_defensa_acta_perfil',
        'calificacion',
        'escala',
        'observaciones',
        'acta_perfil_tribunal_1',
        'acta_perfil_tribunal_2',
        'acta_perfil_tribunal_fps',
        'acta_perfil_tutor',
        'acta_perfil_id_postulante',
        'acta_perfil_id_tema'

    ];
}
