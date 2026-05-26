@extends('layouts.default')

@section('title',$title)

@section('content')
<a href="{{ route('equipes.index') }}">Voltar</a>
<h3>Equipe: </h3>
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

<h3>{{ $text }}</h3>
<form action="{{ route('equipes.destroy',$equipe->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Sim">
</form>
<form action="{{ route ('equipes.index') }}" method="GET">
    <input type="submit" value="Não">
</form>
@endsection
