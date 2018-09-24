@extends('layouts.etiquetas')
@section('content')
    <h1 class="text-center">Etiquetas dos projetos</h1>
    @foreach ($projetos as $p)
    <div class="etiquetas">
        <div class=""><img src="/img/expoceep.jpeg" alt="logo_expoceep"></div>
        <div><h6>Projeto</h6></div>
        <div><h4>{{$p->nome}}</h4></div>
        <div><h6>Alunos</h6></div>
        <div><h4>{{$p->integrantes}}</h4></div>
        <div><h6>Sala {{$p->sala}} box {{$p->box}}</h6></div>
    </div>
    @endforeach
@stop
