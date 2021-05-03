<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $with = ['user', 'comentarios'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_usuario',
        'descricao',
        'imagem',
        'status',
        'longitude',
        'latitude',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_usuario');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'id_post', 'id');
    }
}
