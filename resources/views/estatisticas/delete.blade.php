@extends('layouts.default')

@section('title',$title)

@section('content')
<a href="{{ route('estatisticas.show', $estatistica->jogador) }}">Voltar</a>
<div>
    <label for="">Jogador: </label>
    {{ $estatistica->jogador->nome }}
</div>
<div>
    <label for="">Gols:</label>
    {{ $estatistica->gols }}
</div>
<div>
    <label for="">Assistências</label>
    {{ $estatistica->assistencias }}
</div>
<div>
    <label for="">Partidas</label>
    {{ $estatistica->jogos }}
</div>

<h3>{{ $text }}</h3>
<form action="{{ route('estatisticas.destroy',$estatistica->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Sim">
</form>
<form action="{{ route ('estatisticas.show', $estatistica->jogador) }}" method="GET">
    <input type="submit" value="Não">
</form>
@endsection
