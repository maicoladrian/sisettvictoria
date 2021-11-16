<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    use HasFactory;

    protected $table = 'postulante';
    protected $primaryKey = 'id_postulante';
    protected $fillable = [
        'postulante_id_usuario'
    ];

    public function usuario()
    {
        return $this->belongsTo('Usuario', 'postulante_id_usuario', 'id_usuario');
    }

    // public function usuario(){
    //     return $this->hasMany(Usuario::class, 'id_usuario');
    // }
}
