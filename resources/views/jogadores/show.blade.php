@extends('layouts.default')

@section('title',$title)

@section('content')
<h1>{{ $title }}</h1>
<a href="{{ route('jogadores.index') }}">Voltar</a>
<div>
    <label for="">Nome:</label>
    {{ $jogador->nome }}
</div>
<div>
    <label for="">Nacionalidade:</label>
    {{ $jogador->nacionalidade }}
</div>
<div>
    <label for="">Idade:</label>
    {{ $jogador->idade }}
</div>
<div>
    <label for="">Posição:</label>
    {{ $jogador->posicao }}
</div>
@endsection
