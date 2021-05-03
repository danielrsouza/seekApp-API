<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index() {
        return Auth::user();
    }

    public function store(Request $request) {
        $user = User::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
            'data_nascimento' => $request->input('data_nascimento'),
            'password' => Hash::make($request->input('password'))
        ]);

        return $user;
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
            'data_nascimento' => $request->input('data_nascimento'),
        ]);

        return $user;
    }

    public function remove(User $user)
    {
        $user->delete();
        $response = ['message' => 'Usuário excluído com sucesso!'];

        return $response;
    }
    public function show($id)
    {
        return User::find($id);
    }
}
