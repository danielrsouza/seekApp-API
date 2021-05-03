<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function index() {
        return Post::orderByRaw('id DESC')->get();
    }

    public function store(Request $request) {

        $imageData = $request->imagem;

        $post = Post::create([
            'id_usuario' => $request->input('id_usuario'),
            'descricao' => $request->input('descricao'),
            'imagem' =>$imageData,
            'status' => $request->input('status'),
            'longitude' => $request->input('longitude'),
            'latitude' => $request->input('latitude'),
        ]);


        return $post;
    }

    public function update(Request $request, Post $post)
    {
        $post->update([
            'descricao' => $request->input('descricao'),
            'imagem' => $request->input('imagem'),
            'status' => $request->input('status'),
        ]);

        return $post;
    }

    public function remove($id)
    {
        $comentario = Comentario::where('id_post', $id);
        $comentario->delete();
        $post = Post::find($id);
        $post->delete();
        $response = ['message' => 'Usuário excluído com sucesso!'];

        return $response;
    }

    public function show($id)
    {
        return Post::find($id);
    }
}
