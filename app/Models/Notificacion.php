<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;
    protected $table = 'notificacion';
    protected $primaryKey = 'id_notificacion';
    protected $fillable = [
        'fecha_hora_envio',
        'notificacion_id_tecnica_coaching',
        'notificacion_id_acta_perfil'
    ];
}
