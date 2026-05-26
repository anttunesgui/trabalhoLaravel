@extends('layouts.default')

@section('title',$title)

@section('content')
<h1>{{ "$title - $jogador->nome"}}</h1>
<a href="{{ route('jogadores.index') }}">Voltar</a>
<p>
    @if($estatistica)
        <div>
            <div>
                <label for="">Gols:</label>
                {{ $estatistica->gols }}
            </div>
            <div>
                <label for="">Assistencias:</label>
                {{ $estatistica->assistencias }}
            </div>
            <div>
                <label for="">Partidas:</label>
                {{ $estatistica->jogos }}
            </div>
        </div>
        <a href=" {{ route('estatisticas.delete', $estatistica) }}">Excluir Estatística</a>
    @else
        <div>
            Este Jogador Não Possui Estatísticas
        </div>
        <a href="{{ route('estatisticas.create', $jogador) }}"> Incluir Estatística</a>
    @endif
@endsection
