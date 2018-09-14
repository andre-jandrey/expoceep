
@extends('layouts.app')
@section('content')
    <h1>Detalhes: </h1>
    <ul>
        <li><b>id:</b>{{$curso->id}}</li>
        <li><b>nome:</b>{{$curso->nome}}</li>
        <li><b>situacao:</b>{{$curso->situacao}}</li>
        <li><b>created_at:</b>{{$curso->created_at}}</li>
        <li><b>updated_at:</b>{{$curso->updated_at}}</li>
    </ul>@stop
