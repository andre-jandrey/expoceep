
@extends('layouts.admin')
@section('content')
    <h1>Lista de projetos</h1>
<a class='btn btn-primary' href='{{action("ProjetoController@create")}}'>
Novo projeto
</a>
<table class='table table-striped table-bordered table-hover'>
    <tr><th>#</th><th>Projeto</th><th>Integrantes</th><th>Orientadores</th><th>Curso</th><th>Sala</th><th>Box</th><th>Usuário</th><th>Status</th><th colspan='2'>Ação</th>
        @foreach ($projetos as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nome}}</td>
            <td>{{$p->integrantes}}</td>
            <td>{{$p->orientadores}}</td>
            <td>{{$p->curso->nome}}</td>
            <td>{{$p->sala}}</td>
            <td>{{$p->box}}</td>
            <td>{{$p->user->name}}</td>
            <td>{{$p->status}}</td>
            <td><a class='btn btn-success' href='/aprovar/{{$p->id}}'>Aprovar</a></td>
            <td><a class='btn btn-danger' href='/reprovar/{{$p->id}}'>Reprovar</a></td>
        </tr>
        @endforeach
</table>
@stop
