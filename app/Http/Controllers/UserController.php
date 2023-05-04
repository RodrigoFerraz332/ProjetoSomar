<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
 
class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     */
    public function index()
    {
        //$users = DB::select('SELECT * FROM perfis_de_acessos');
        foreach (Usuario::all() as $usuario){
            var_dump($usuario->email);
            var_dump($usuario->nome);
            var_dump($usuario->perfilDeAcesso()->getResults()->descricao);

            

        }
         die;
        return view('index')
        
            ->with('users',  $users);
    } 
}