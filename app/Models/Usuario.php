<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
        'usuario',
        'password',
        'usuario_id_informacion_personal',
        'usuario_id_rol'
    ];

    public function informacion_personal()
    {
        return $this->belongsTo('Informacion_Personal', 'usuario_id_informacion_personal', 'id_informacion_personal');
    }

    public function rol()
    {
        return $this->belongsTo('Rol', 'usuario_id_rol', 'id_rol');
    }
}
