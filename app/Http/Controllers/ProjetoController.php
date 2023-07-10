<?php

namespace App\Http\Controllers;

use App\Models\CausaDeAtuacao;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Models\Projeto;
use Illuminate\Support\MessageBag;
use Illuminate\View\View;
use App\Models\ImagensProjetos;
use App\Models\Ods;
use App\Models\ProjetoCausa;
use App\Models\ProjetoOds;

class ProjetoController extends BaseController
{
    protected $messageBag;
    public function __construct(MessageBag $messageBag)
    {
        $this->messageBag = $messageBag;
    }
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
        
        try{
       $projeto=new Projeto(); 
        $projeto->nomeProjeto = $request->nomeProjeto;
        $projeto->parceiros = $request->parceiros;
        $projeto->descricao = $request->descricao;
        $projeto->linkVideo = $request->linkVideo;
        $projeto->aprovado = 1;
        $projeto->idUnidade = $request->idUnidade ?? 1;
        $projeto->idUsuario=$request->user()->id;
      
        $projeto -> save();
        if ($request->hasFile('fotos')) {
            $images = $request->file('fotos');
            
            foreach ($images as $image) {
                $extension = $image->extension();

                $imageName = md5($image->getClientOriginalName() . strtotime("now")) . "." . $extension;
    
                $image->move(public_path('storage/imagens/projetos'), $imageName);
                $Imagens=new ImagensProjetos();
                $Imagens->nomeImagem=$imageName;
                $Imagens->idProjeto=$projeto->idProjeto;
                $Imagens->save();
    

            }

           
        }
        foreach ($request->ods as $ods) {
            $projetoOds=new ProjetoOds();
            $projetoOds->idProjeto=$projeto->idProjeto;
            $projetoOds->idODS=$ods;
            $projetoOds->save();


        }

        foreach ($request->causas as $causa) {
            $projetocausa=new ProjetoCausa();
            $projetocausa->idProjeto=$projeto->idProjeto;
            $projetocausa->idcausa_de_atuacao=$causa;
            $projetocausa->save();


        }

       
    }catch(Exception $e){
        $this->messageBag->add(0,$e->getMessage());
        dd($e);
        return redirect()->back();
        
    }
    return redirect('/admin/projetos')
    ->with('success', 'Projeto cadastrado com sucesso!')
    ->with('errors', $this->messageBag);

    }
    public function edit(Request $request): View
    {
        
        $odss= Ods::all();
        $causas= CausaDeAtuacao::all();
        return view('cadastrar-projeto', [
            'user' => $request->user(),
            'errors'=>$this->messageBag,
            'odss'=>$odss,
            'causas'=>$causas

        ]);
    }
}



