<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Docente extends Model
{
    use HasFactory;

    protected $table = 'tipo_docente';
    protected $primaryKey = 'id_tipo_docente';
    protected $fillable = [
        'detalle_tipo_docente'
    ];
}
