
@extends('layouts.app')
@section('content')
    <h1>Detalhes: </h1>
    <ul>
        <li><b>id:</b>{{$projeto->id}}</li>
        <li><b>nome:</b>{{$projeto->nome}}</li>
        <li><b>curso_id:</b>{{$projeto->curso_id}}</li>
        <li><b>idusuario:</b>{{$projeto->idusuario}}</li>
        <li><b>box:</b>{{$projeto->box}}</li>
        <li><b>turma:</b>{{$projeto->turma}}</li>
        <li><b>integrantes:</b>{{$projeto->integrantes}}</li>
        <li><b>orientadores:</b>{{$projeto->orientadores}}</li>
        <li><b>email:</b>{{$projeto->email}}</li>
        <li><b>arquivo:</b>{{$projeto->arquivo}}</li>
        <li><b>data_hora:</b>{{$projeto->data_hora}}</li>
        <li><b>created_at:</b>{{$projeto->created_at}}</li>
        <li><b>updated_at:</b>{{$projeto->updated_at}}</li>
    </ul>@stop