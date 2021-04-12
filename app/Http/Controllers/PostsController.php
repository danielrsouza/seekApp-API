<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        return Post::all();
    }

    public function store(Request $request) {
        $post = Post::create([
            'id_usuario' => $request->input('id_usuario'),
            'descricao' => $request->input('descricao'),
            'imagem' => $request->input('imagem'),
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

    public function remove(Post $post)
    {

        $post->delete();
        $response = ['message' => 'Usuário excluído com sucesso!'];

        return $response;
    }
}
