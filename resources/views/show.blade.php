@extends('_pac.corpo')

@section('conteudo')

    <label for="">nome</label><br>
    <input type="text" name="nome" value="{{ $produto->nome}}"><br>
    <label for="">descricao</label><br>
    <input type="text" name="descricao" value="{{ $produto->descricao}}"><br>
    <label for="">peso valor redodo</label><br>
    <input type="text" name="peso" value="{{ $produto->peso}}"><br>
    <label for="">preco venada ex :50 valor redodo</label><br>
    <input type="text" name="preco_venada" value="{{ $produto->preco_venada}}"><br>
    

@endsection
