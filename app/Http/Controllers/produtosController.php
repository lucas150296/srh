<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteProduto;
class produtosController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        
        SiteProduto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'peso' => $request->peso,
            'preco_venada' => $request->preco_venada,
        ]);
        

        return "Produto Criado com Sucesso!";
    }
}
