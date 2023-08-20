<?php

namespace App\Http\Controllers;

use App\Models\CausaDeAtuacao;
use App\Models\ImagensProjetos;
use App\Models\Ods;
use App\Models\Projeto;
use App\Models\ProjetoCausa;
use App\Models\ProjetoOds;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\MessageBag;
use Illuminate\View\View;

class ProjetoController extends BaseController
{
    protected $messageBag;

    public function __construct(MessageBag $messageBag)
    {
        $this->messageBag = $messageBag;
    }

    public function index()
    {
        return view('projetos')->with('projetos', 0);
    }

    public function update(Request $request): string
    {

        $path = $request->file('imagem')->store('avatars');

        return $path;
    }

    public function cadastro(Request $request)
    {
        $odss = Ods::all();
    $causas = CausaDeAtuacao::all();
        try {
       $projeto = new Projeto();
        $projeto->nomeProjeto = $request->nomeProjeto;
        $projeto->parceiros = $request->parceiros;
        $projeto->descricao = $request->descricao;
        $projeto->linkVideo = $request->linkVideo;
        $projeto->aprovado = 0;
        $projeto->idUnidade = $request->idUnidade ?? 1;
        $projeto->idUsuario = $request->user()->id;
        $projeto->publico_alvo = $request->publico_alvo;

        $projeto->save();
        if ($request->hasFile('fotos')) {
            $images = $request->file('fotos');

            foreach ($images as $image) {
                $extension = $image->extension();

                $imageName = md5($image->getClientOriginalName().strtotime('now')).'.'.$extension;

                $image->move(public_path('storage/imagens/projetos'), $imageName);
                $Imagens = new ImagensProjetos();
                $Imagens->nomeImagem = $imageName;
                $Imagens->idProjeto = $projeto->idProjeto;
                $Imagens->save();

            }

        }
        foreach ($request->ods as $ods) {
            $projetoOds = new ProjetoOds();
            $projetoOds->idProjeto = $projeto->idProjeto;
            $projetoOds->idODS = $ods;
            $projetoOds->save();

        }

        foreach ($request->causas as $causa) {
            $projetocausa = new ProjetoCausa();
            $projetocausa->idProjeto = $projeto->idProjeto;
            $projetocausa->idcausa_de_atuacao = $causa;
            $projetocausa->save();

        }
        
   

    } catch (Exception $e) {
        $this->messageBag->add("error", $e->getMessage());
        //dd($e);
        return view('cadastrar-projeto')
        ->with('success', 'Projeto cadastrado com sucesso!')
        ->with('odss', $odss)
        ->with('causas', $causas)
        ->with('message', $this->messageBag);

    }
    

    $this->messageBag->add('success', 'Projeto cadastrado com sucesso!');

    return view('cadastrar-projeto')
        ->with('success', 'Projeto cadastrado com sucesso!')
        ->with('odss', $odss)
        ->with('causas', $causas)
        ->with('message', $this->messageBag);
        
        

    }
    public function aprovarProjeto($id)
    {
       
            // Localize o projeto pelo ID
            $projeto = Projeto::findOrFail($id);

            
                $projeto->aprovado = true;
                $projeto->save();

            

        // Redirecione o usuário de volta à página do projeto
        return redirect()->route('projetos.lista')
            ->with('message', $this->messageBag);
    }
    
    
    

    public function edit(Request $request): View
    {

        $odss = Ods::all();
        $causas = CausaDeAtuacao::all();
        $request->user()->getPermissionsViaRoles();


        return view('cadastrar-projeto', [
            'user' => $request->user(),
            'message' => $this->messageBag,
            'odss' => $odss,
            'causas' => $causas,

        ]);
    }
    public function aprovarProjetos()
    {
        return view('aprovar')
        ->with('projetos', Projeto::all())
        ->with('message', $this->messageBag);
    }
   
   
}
