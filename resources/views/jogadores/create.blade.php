@extends('layouts.default')

@section('title',$title)

@section('content')
<h1>{{ $title }}</h1>
<a href="{{ route('jogadores.index') }}">Voltar</a>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form action="{{ route('jogadores.store') }}" method="post">   
    @csrf 
    <div>
        <label for="">Nome</label>
        <input type="text" name="nome">
    </div>
    <div>
        <label for="">Nacionalidade</label>
        <input type="text" name="nacionalidade">
    </div>
    <div>
        <label for="">Posição</label>
        <input type="text" name="posicao">
    </div>
    <div>
        <label for="">Idade</label>
        <input type="text" name="idade">
    </div>
    <div>
        <input type="submit" value="Cadastrar">
    </div>
</form>
@endsection
