@extends('_pac.corpo')

@section('conteudo')
    <form action="{{ route('site.cliente') }}" method="POST">
        @csrf
        <label for="">nome: </label>
        <input type="text" name="nome">
        <br>
        <label for="">endereco</label>
        <input type="text" name="endereco">
        <br>
        <button>salvar</button>
    </form>
@endsection