<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion_Temporal extends Model
{
    use HasFactory;

    protected $table = 'notificacion_temporal';
    protected $primaryKey = 'id_notificacion_temporal';
    protected $fillable = [
        'fecha_enviar',
        'estado',
        'nt_id_acta_perfil'
    ];
}
