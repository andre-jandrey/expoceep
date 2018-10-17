
@extends('layouts.admin')
@section('content')
    <h1>Lista de projetos</h1>
    <div class="container">
  <div class="row">
    <div class="col-xs-12">
<table id="dataTable" class="table table-bordered table-hover dt-responsive">
<thead>
    <tr><th>#</th><th>Projeto</th><th>Integrantes</th><th>Orientadores</th><th>Curso</th><th>Sala</th><th>Box</th><th>Usuário</th><th>arquivo</th>
    </thead><tbody>
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
            <td><a class='btn btn-info' href='/storage/{{$p->arquivo}}'>DOWNLOAD</a></td>
            <!--<td><a class='btn btn-success' href='/aprovar/{{$p->id}}'>Aprovar</a></td>
            <td><a class='btn btn-danger' href='/reprovar/{{$p->id}}'>Reprovar</a></td> -->
        </tr>
        @endforeach
        </tbody>
</table>
</div>
</div>
</div>
@stop
