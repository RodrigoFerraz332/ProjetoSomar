<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class OdsController extends Controller
{

public function show($id)
{
    $ods = DB::select('SELECT * FROM odss o where o.idODS=?',[$id]);
    $projetos = DB::select('SELECT p.* FROM projet_odss po join projetos p on po.idProjeto = p.idProjeto
    WHERE po.idODS = ?',[$id]);
    return view('ods')->with('ods',  $ods[0])->with('projetos',  $projetos);
}


}