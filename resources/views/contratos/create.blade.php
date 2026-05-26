@extends('layouts.default')

@section('title',$title)

@section('content')
<h1>{{" $title - $jogador->nome"}}</h1>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form action="{{ route('contratos.store') }}" method="post">   
    @csrf 
    <input type="hidden" name="jogador_id" value="{{ $jogador->id }}" />
    <div>
        <label for="equipe_id">Equipe</label>
        <select name="equipe_id" id="equipe_id">
            <option value="">Selecione uma equipe</option>
            @foreach($equipes as $equipe)
                <option value="{{ $equipe->id }}">
                    {{ $equipe->nome }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="">Salário</label>
        <input type="number" name="salario" step="0.01">
    </div>
    <div>
        <label for="">Início do Contrato</label>
        <input type="date" name="inicio"> 
    </div>
    <div>
        <label for="">Fim do Contrato</label>
        <input type="date" name="fim">
    </div>
    <div>
        <input type="submit" value="Incluir Contrato">
    </div>
</form>
@endsection
