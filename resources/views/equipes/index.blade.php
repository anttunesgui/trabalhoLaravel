@extends('layouts.default')

@section('title',$title)

@section('content')
<h1>Lista de {{ $title }}</h1>

<a href=" {{ route('equipes.create') }}">Incluir Nova Equipe</a>
@foreach ($equipes as $equipe)
    <div>
        {{ $equipe->nome }} 
        - <a href="{{ route('equipes.show',$equipe->id) }}">Detalhes</a>
        - <a href="{{ route('equipes.delete',$equipe->id) }}">Excluir</a>    
         
    </div>
@endforeach
@endsection
    