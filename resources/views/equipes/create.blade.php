@extends('layouts.default')

@section('title',$title)

@section('content')
<h1>{{ $title }}</h1>
<a href="{{ route('equipes.index') }}">Voltar</a>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form action="{{ route('equipes.store') }}" method="post">   
    @csrf 
    <div>
        <label for="">Nome</label>
        <input type="text" name="nome">
    </div>
    <div>
        <label for="">País</label>
        <input type="text" name="pais">
    </div>
    <div>
        <label for="">Ano de Fundação</label>
        <input type="number" name="ano_fundacao">
    </div>
    <div>
        <input type="submit" value="Cadastrar">
    </div>
</form>
@endsection
