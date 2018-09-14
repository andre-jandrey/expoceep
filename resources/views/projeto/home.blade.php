
@extends('layouts.app')
@section('content')
    <h1>Meus projetos
<a class='btn btn-primary' href='{{action("ProjetoController@create")}}'>
Enviar projeto
</a></h1>
<table class='table table-striped table-bordered table-hover'>
    <tr><th>Nome</th><th>Curso</th><th>Sala</th><th>Box</th><th>Turma</th><th>Integrantes</th><th>Orientadores</th><th>Envio</th><th colspan='3'>Ações</th>
        @foreach ($projeto as $d)
            <tr>
           <!--  <td>{{$d->id}}</td> -->
            <td>{{$d->nome}}</td>
            <td>{{$d->curso["nome"]}}</td>
            <td>{{$d->sala}}</td>
            <td>{{$d->box}}</td>
            <td>{{$d->turma}}</td>
            <td>{{$d->integrantes}}</td>
            <td>{{$d->orientadores}}</td>
           <!--  <td>{{$d->email}}</td> -->
           <!--  <td>{{$d->arquivo}}</td> -->
            <td>{{$d->data_hora}}</td>
           <!--  <td>{{$d->created_at}}</td>
            <td>{{$d->updated_at}}</td> -->
      <!--   <td>
            <a class='btn btn-success' href='{{action('ProjetoController@show', $d->id)}}'>
                <i class='material-icons'>info</i>
            </a>
        </td> -->
        <td>
        <form action='/projeto/{{$d->id}}' method='post' onsubmit="return confirm('Tem certeza que deseja excluir?')">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class='btn btn-danger'>
                <i class='material-icons'>Excluir</i>
            </button>
        </form>
    </td>
    <td>
        <a class='btn btn-warning' href='{{action('ProjetoController@edit', $d->id)}}'>
            <i class='material-icons'>Alterar</i>
        </a>
    </td>
    <td>
        <a class='btn btn-info' href='{{action('MapaController@showBlocoCurso', $d->id)}}'>
            <i class='material-icons'>Escolher box</i>
        </a>
    </td>
    </tr>
@endforeach
</table>
@stop
