@extends('layouts.default')

@section('title',$title)

@section('content')
<h1>{{ $title }}</h1>
<a href="{{ route('equipes.index') }}">Voltar</a>
<div>
    <label for="">Nome:</label>
    {{ $equipe->nome }}
</div>
<div>
    <label for="">País:</label>
    {{ $equipe->pais }}
</div>
<div>
    <label for="">Ano de Fundação:</label>
    {{ $equipe->ano_fundacao }}
</div>
@endsection
