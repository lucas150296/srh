@extends('_pac.corpo')

@section('conteudo')

    <label for="">nome</label><br>
    <input type="text" name="nome" value="{{ $cliente->nome}}"><br>
    <label for="">endereço</label><br>
    <input type="text" name="endereco" value="{{ $cliente->endereco}}"><br>
    
    

@endsection