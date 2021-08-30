<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteCliente;

class clientesController extends Controller
{
    public function create(){
        return view('cliente');
    }

    public function store(request $request){
        SiteCliente::create([
            'nome' => $request->nome,
            'endereco' =>$request->endereco
        ]);
        
        return "cliente salvo";
    }
}
