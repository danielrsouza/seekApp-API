<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_usuario',
        'id_post',
        'descricao',
        'updated_at',
        'created_at'
    ];
}
