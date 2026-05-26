@extends('layouts.default')

@section('title',$title)

@section('content')
    @if(session('mensagemErro'))
        <div style="color:red;">
            {{ session('mensagemErro') }}
        </div>
    @endif

    @if(session('mensagemSucesso'))
        <div style="color:green;">
            {{ session('mensagemSucesso') }}
        </div>
    @endif

    <h1>Lista de {{ $title }}</h1>

    <a href=" {{ route('jogadores.create') }}">Incluir Novo Jogador</a>
    @foreach ($jogadores as $jogador)
        <div>
            {{ $jogador->nome }} 
            - <a href="{{ route('jogadores.show',$jogador->id) }}">Detalhes</a>
            - <a href="{{ route('jogadores.delete',$jogador->id) }}">Excluir</a>   
            - <a href="{{ route('contratos.show', $jogador->id) }} ">Contrato</a>        
            - <a href="{{ route('estatisticas.show', $jogador->id) }} ">Estatísticas</a>        
        </div>
    @endforeach
@endsection
    