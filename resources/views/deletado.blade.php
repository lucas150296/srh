@extends('_pac.corpo')

@section('conteudo')
<form action="{{route('excluir_produto', ['id' => $produto->id])}}" method="POST" style="text-align: center">
    @csrf
    <label for="">tem creteza que vai excluir o produto</label><br>
    <input type="text" name="nome" value="{{$produto->nome}}"><br>
    
    <button style="margin: 15px">sim</button><br>
    <a href="{{route('paginal_produtos', $id = 1)}}" style="border: solid; margin:15px">consutar produtos</a>
</form>
@endsection