<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentariosController extends Controller
{
    public function index() {
        return Comentario::all();
    }

    public function store(Request $request) {
        $comentario = Comentario::create([
            'id_usuario' => $request->input('id_usuario'),
            'id_post'  =>  $request->input('id_post'),
            'descricao' =>  $request->input('descricao')
        ]);

        return $comentario;
    }

    public function update(Request $request, Comentario $comentario)
    {
        $comentario->update([
            'descricao' => $request->input('descricao'),
            'imagem' => $request->input('imagem'),
            'status' => $request->input('status'),
        ]);

        return $comentario;
    }

    public function remove(Comentario $comentario)
    {

        $comentario->delete();
        $response = ['message' => 'Comentário excluído com sucesso!'];

        return $response;
    }
}
