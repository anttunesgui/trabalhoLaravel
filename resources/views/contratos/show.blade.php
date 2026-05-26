@extends('layouts.default')

@section('title',$title)

@section('content')
<h1>{{ "$title - $jogador->nome"}}</h1>
<a href="{{ route('jogadores.index') }}">Voltar</a>
<p>
    @if($contrato)
        <div>
            <div>
                <label for="">Equipe:</label>
                {{ $contrato->equipe->nome }}
            </div>
            <div>
                <label for="">Salário:</label>
                {{ $contrato->salario }}
            </div>
            <div>
                <label for="">Início do contrato:</label>
                {{ $contrato->inicio }}
            </div>
            <div>
                <label for="">Fim do Contrato:</label>
                {{ $contrato->fim }}
            </div>
        </div>
        <a href=" {{ route('contratos.delete', $contrato) }}">Excluir Contrato</a>
    @else
        <div>
            Este Jogador Não Possui Contrato
        </div>
        <a href="{{ route('contratos.create', $jogador) }}"> Incluir Contrato</a>
    @endif
@endsection
