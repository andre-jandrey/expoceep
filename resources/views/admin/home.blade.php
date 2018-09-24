
@extends('layouts.admin')
@section('content')
    <h1>Lista de projetos</h1>
<a class='btn btn-warning' href='{{action("CursoController@create")}}'>
Novo
</a>
<table class='table table-striped table-bordered table-hover'>
    <tr><th>#</th><th>Projeto</th><th>Integrantes</th><th>Orientadores</th><th>Sala</th><th>Box</th><th>Usuário</th>
        @foreach ($projetos as $p)
            <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nome}}</td>
            <td>{{$p->integrantes}}</td>
            <td>{{$p->orientadores}}</td>
            <td>{{$p->sala}}</td>
            <td>{{$p->box}}</td>
            <td>{{$p->user->name}}</td>
    </tr>
@endforeach
</table>
@stop
