@extends('layouts.default')

@section('title',$title)

@section('content')
<a href="{{ route('contratos.show', $contrato->jogador) }}">Voltar</a>
<div>
    <label for="">Jogador: </label>
    {{ $contrato->jogador->nome }}
</div>
<div>
    <label for="">Equipe:</label>
    {{ $contrato->equipe->nome }}
</div>
<div>
    <label for="">Salário:</label>
    {{ $contrato->salario }}
</div>
<div>
    <label for="">Início</label>
    {{ $contrato->inicio }}
</div>
<div>
    <label for="">Fim</label>
    {{ $contrato->fim }}
</div>

<h3>{{ $text }}</h3>
<form action="{{ route('contratos.destroy',$contrato->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Sim">
</form>
<form action="{{ route ('contratos.show', $contrato->jogador) }}" method="GET">
    <input type="submit" value="Não">
</form>
@endsection
