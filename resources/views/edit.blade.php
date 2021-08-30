
@extends('_pac.corpo')

@section('conteudo')
<form action="{{route('altera_produto', ['id' => $produto->id])}}" method="POST" style="text-align: center">
    @csrf
    <label for="">nome</label><br>
    <input type="text" name="nome" value="{{$produto->nome}}"><br>
    <label for="">descricao</label><br>
    <input type="text" name="descricao" value="{{$produto->descricao}}"><br>
    <label for="">peso valor redodo</label><br>
    <input type="text" name="peso" value="{{$produto->peso}}"><br>
    <label for="">preco venada ex :50 valor redodo</label><br>
    <input type="text" name="preco_venada" value="{{$produto->preco_venada}}"><br>
    <button style="margin: 15px">salva</button><br>
    <a href="{{route('paginal_produtos', $id = 1)}}" style="border: solid; margin:15px">consutar produtos</a>
</form>
@endsection