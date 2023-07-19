<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class PaginaInicialController extends BaseController
{
    public function paginainicial()
    {
        return view('paginainicial')->with('projetos', 0);
    }
}
