<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ProjetoController extends BaseController
{
    
    public function index()
    {
        return view("projetos")->with("projetos",0);
    }
}


