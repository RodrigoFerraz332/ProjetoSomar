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

        try {
       $projeto = new Projeto();
        $projeto->nomeProjeto = $request->nomeProjeto;
        $projeto->parceiros = $request->parceiros;
        $projeto->descricao = $request->descricao;
        $projeto->linkVideo = $request->linkVideo;
        $projeto->aprovado = 1;
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
        $this->messageBag->add(0, $e->getMessage());

        return redirect()->back();

    }
    $odss = Ods::all();
    $causas = CausaDeAtuacao::all();

    $this->messageBag->add('success', 'Projeto cadastrado com sucesso!');

    return view('cadastrar-projeto')
        ->with('success', 'Projeto cadastrado com sucesso!')
        ->with('odss', $odss)
        ->with('causas', $causas)
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
}
