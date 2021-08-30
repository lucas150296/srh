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

    public function show($id){
        $produto = SiteProduto::findOrFail($id);
        return view('show', ['produto' => $produto]);
    }

    public function edit($id){
        $produto = siteProduto::findOrFail($id);
        return view('edit', ['produto' => $produto]);
    }

    public function update(request $request, $id ){
        $Produto = siteProduto::findOrFail($id);

        $Produto->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'peso' => $request->peso,
            'preco_venada' => $request->preco_venada,
        ]);

        return "produto altualizado com sucesso!";

    }

    public function delete($id){
        $produto = siteProduto::findOrFail($id);

        return view('deletado', ['produto' => $produto]);
    }

    public function destroy($id){

        $produto = siteProduto::findOrFail($id);
        $produto->delete();

        return "produto deletado com sucesso";
    }
}
