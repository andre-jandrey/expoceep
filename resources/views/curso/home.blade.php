
@extends('layouts.app')
@section('content')
    <h1>Listagem de curso</h1>
<a class='btn btn-warning' href='{{action("CursoController@create")}}'>
Novo
</a>
<table class='table table-striped table-bordered table-hover'>
    <tr><th>id</th><th>nome</th><th>situacao</th><th>created_at</th><th>updated_at</th>
        @foreach ($cursos as $d)
            <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->nome}}</td>
            <td>{{$d->situacao}}</td>
            <td>{{$d->created_at}}</td>
            <td>{{$d->updated_at}}</td>
        <td>
            <a class='btn btn-success' href='{{action('CursoController@show', $d->id)}}'>
                <i class='material-icons'>info</i>
            </a>
        </td>
        <td>
        <form action='/curso/{{$d->id}}' method='post'>
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class='btn btn-danger'>
                <i class='material-icons'>delete</i>
            </button>
        </form>
    </td>
    <td>
        <a class='btn btn-warning' href='{{action('CursoController@edit', $d->id)}}'>
            <i class='material-icons'>edit</i>
        </a>
    </td>
    </tr>
@endforeach
</table>
@stop
