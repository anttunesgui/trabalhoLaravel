@extends('layouts.default')

@section('title',$title)

@section('content')
<a href="{{ route('jogadores.index') }}">Voltar</a>
<h3>Jogador: </h3>
<div>
    <label for="">Nome:</label>
    {{ $jogador->nome }}
</div>
<div>
    <label for="">Nacionalidade:</label>
    {{ $jogador->nacionalidade }}
</div>
<div>
    <label for="">Posição:</label>
    {{ $jogador->posicao }}
</div>
<div>
    <label for="">Idade:</label>
    {{ $jogador->idade }}
</div>

<h3>{{ $text }}</h3>
<form action="{{ route('jogadores.destroy',$jogador->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Sim">
</form>
<form action="{{ route ('jogadores.index') }}" method="GET">
    <input type="submit" value="Não">
</form>
@endsection
