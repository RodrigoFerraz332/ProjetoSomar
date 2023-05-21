<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
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
}



