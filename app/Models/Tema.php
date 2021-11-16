<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;

    protected $table = 'tema';
    protected $primaryKey = 'id_tema';
    protected $fillable = [
        'titulo_tema',
        'tema_id_estado_tema',
        'tema_id_modalidad'
    ];
}
