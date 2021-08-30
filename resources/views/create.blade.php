
@extends('_pac.corpo')

@section('conteudo')
<form action="{{route('registrar_produto')}}" method="POST">
    @csrf
    <label for="">nome</label><br>
    <input type="text" name="nome"><br>
    <label for="">descricao</label><br>
    <input type="text" name="descricao"><br>
    <label for="">peso valor redodo</label><br>
    <input type="text" name="peso"><br>
    <label for="">preco venada ex :50 valor redodo</label><br>
    <input type="text" name="preco_venada"><br>
    <button>salva</button><br>
</form>
@endsection