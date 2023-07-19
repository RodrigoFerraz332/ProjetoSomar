<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     */
    public function index()
    {
        //$users = DB::select('SELECT * FROM perfis_de_acessos');
        foreach (Usuario::all() as $usuario) {
            var_dump($usuario->email);
            var_dump($usuario->nome);
            var_dump($usuario->perfilDeAcesso()->getResults()->descricao);

        }
         exit;

        return view('index')

            ->with('users', $users);
    }
}
