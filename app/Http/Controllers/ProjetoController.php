<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ProjetoController extends BaseController
{
    
    public function index()
    {
        return view("projetos")->with("projetos",0);
    }
    
    public function update(Request $request): string
    {
        
        $path = $request->file('imagem')->store('avatars');
 
        return $path;
    }
    public function cadastro (Request $request)
    {
        $nomeProjeto = $request->nomeProjeto;
        $parceiros = $request->parceiros;
        $causaAtuacao = $request->causaAtuacao;
        $descricao = $request->descricao;
        $linkVideo = $request->linkVideo;
        $aprovado = $request->aprovado;
        $idUnidade = $request->idUnidade;
        DB::insert('insert into projetos (
            nomeProjeto,
            parceiros,
            causaAtuacao,
            descricao,
            linkVideo,
            aprovado,
            idUnidade
          ) values (?, ?, ?, ?, ?, ?, ?)', 
          [
            $nomeProjeto,
            $parceiros,
            $causaAtuacao,
            $descricao,
            $linkVideo,
            $aprovado,
            $idUnidade,
        ]);
        return redirect('/admin/projetos');

    }
}



