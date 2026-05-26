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
<form action="{{ route('estatisticas.store') }}" method="post">   
    @csrf 
    <input type="hidden" name="jogador_id" value="{{ $jogador->id }}" />
    <div>
        <label for="">Gols</label>
        <input type="number" name="gols">
    </div>
    <div>
        <label for="">Assistências</label>
        <input type="number" name="assistencias"> 
    </div>
    <div>
        <label for="">Partidas</label>
        <input type="number" name="jogos">
    </div>
    <div>
        <input type="submit" value="Incluir Estatística">
    </div>
</form>
@endsection
