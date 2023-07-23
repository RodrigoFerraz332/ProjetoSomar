<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OdsController extends Controller
{
    public function show2($id)
    {
        $ods = DB::select('SELECT * FROM odss o where o.idODS=?', [$id]);
        $projetos = DB::select('SELECT p.descricao, u.cidade, u.nomeUnidade, p.nomeProjeto, GROUP_CONCAT(DISTINCT po2.idODS ORDER BY po2.idODS) AS idsODS,
        GROUP_CONCAT(DISTINCT ip.nomeImagem ORDER BY ip.idImagensProjetos) AS nomeImagens
         FROM projet_odss po 
        join projetos p on po.idProjeto = p.idProjeto 
        join unidades u on u.idUnidade = p.idUnidade 
        join projet_odss po2 on p.idProjeto = po2.idProjeto
        left join imagensprojetos ip on p.idProjeto = ip.idProjeto
        WHERE po.idODS = ? and p.aprovado = 1
        group by po2.idProjeto, p.descricao, p.nomeProjeto, u.cidade, u.nomeUnidade, ip.idProjeto
        ', [$id]);
        $total = DB::select('SELECT count(p.idProjeto) as total from projetos p where p.aprovado = 1')[0];

        return view('ods')->with('ods', $ods[0])
            ->with('projetos', $projetos)
            ->with('total', $total);
    }

    public function show($id)
    {

        $ods = DB::table('odss')->where('idODS', $id)->first();
        $projetos = DB::table('projet_odss')
            ->select(
                'p.descricao',
                'u.cidade',
                'u.nomeUnidade',
                'p.nomeProjeto',
                'p.parceiros',
                'p.linkVideo',
                'p.publico_alvo as publicoAlvo',
                DB::raw("GROUP_CONCAT(DISTINCT od.nomeODS ORDER BY od.idODS SEPARATOR ', ') AS idsODS "),
                DB::raw('GROUP_CONCAT(DISTINCT ip.nomeImagem ORDER BY ip.idImagensProjetos) AS nomeImagens'),
                DB::raw("GROUP_CONCAT(DISTINCT ca.nomeCausa ORDER BY ca.idcausa_de_atuacao SEPARATOR ', ') AS causas ")
            )
            ->from('projet_odss', 'po')
            ->join('projetos as p', 'po.idProjeto', '=', 'p.idProjeto')
            ->join('unidades as u', 'u.idUnidade', '=', 'p.idUnidade')
            ->join('projet_odss as po2', 'p.idProjeto', '=', 'po2.idProjeto')
            ->join('odss as od', 'po2.idODS', '=', 'od.idODS')
            ->leftJoin('imagensprojetos as ip', 'p.idProjeto', '=', 'ip.idProjeto')
            ->leftJoin('projeto_causa as pc', 'p.idProjeto', '=', 'pc.idProjeto')
            ->leftJoin('causa_de_atuacao as ca', 'ca.idcausa_de_atuacao', '=', 'pc.idcausa_de_atuacao')
            ->where('po.idODS', $id)
            ->where('p.aprovado', 1)
            ->groupBy('po2.idProjeto', 'p.descricao', 'p.nomeProjeto', 'u.cidade', 'u.nomeUnidade', 'ip.idProjeto', 'p.parceiros', 'pc.idcausa_de_atuacao', 'p.linkVideo', 'pc.idProjeto', 'p.publico_alvo')
            ->get();
    $total = DB::table('projetos')->where('aprovado', 1)->count();

        return view('ods')->with('ods', $ods)
            ->with('projetos', $projetos)
            ->with('total', $total);

    }

    public function filter(Request $request)
    {
    $ods = null;

    $query = DB::table('projet_odss')

        ->select(
            'p.descricao',
            'u.cidade',
            'u.nomeUnidade',
            'p.nomeProjeto',
            'p.parceiros',
            'p.linkVideo',
            'p.publico_alvo as publicoAlvo',
            DB::raw("GROUP_CONCAT(DISTINCT od.nomeODS ORDER BY od.idODS SEPARATOR ', ') AS idsODS"),
            DB::raw('GROUP_CONCAT(DISTINCT ip.nomeImagem ORDER BY ip.idImagensProjetos) AS nomeImagens'),
            DB::raw("GROUP_CONCAT(DISTINCT ca.nomeCausa ORDER BY ca.idcausa_de_atuacao SEPARATOR ', ') AS causas")
        )
        ->from('projet_odss', 'po')
        ->join('projetos as p', 'po.idProjeto', '=', 'p.idProjeto')
        ->join('unidades as u', 'u.idUnidade', '=', 'p.idUnidade')
        ->join('projet_odss as po2', 'p.idProjeto', '=', 'po2.idProjeto')
        ->join('odss as od', 'po2.idODS', '=', 'od.idODS')
        ->leftJoin('imagensprojetos as ip', 'p.idProjeto', '=', 'ip.idProjeto')
        ->leftJoin('projeto_causa as pc', 'p.idProjeto', '=', 'pc.idProjeto')
        ->Join('causa_de_atuacao as ca', 'ca.idcausa_de_atuacao', '=', 'pc.idcausa_de_atuacao')
        ->where('p.aprovado', 1);

        if ($request->ods) {
            $ods = DB::table('odss')->where('idODS', $request->ods)->first();
            $query->where('po.idODS', $ods->idODS);
        }

        if ($request->causas) {
            $causa = DB::table('causa_de_atuacao')->where('idcausa_de_atuacao', $request->causas)->first();
            $query->where('pc.idcausa_de_atuacao', $causa->idcausa_de_atuacao);
        }
    $query->groupBy('po2.idProjeto', 'p.descricao', 'p.nomeProjeto', 'u.cidade', 'u.nomeUnidade', 'ip.idProjeto', 'p.parceiros', 'pc.idcausa_de_atuacao', 'p.linkVideo', 'pc.idProjeto', 'p.publico_alvo');

    $projetos = $query->get();
    $total = DB::table('projetos')->where('aprovado', 1)->count();
    $odss = DB::table('odss')->get();
    $causas = DB::table('causa_de_atuacao')->get();

    return view('ods')->with('ods', $ods)
        ->with('projetos', $projetos)
        ->with('total', $total)
        ->with('odss', $odss)
        ->with('causas', $causas);

}
}
