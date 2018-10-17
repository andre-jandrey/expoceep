
@extends('layouts.admin')
@section('content')
    <h1>Lista de usuarios</h1>
<table id="dataTable" class='table table-striped table-bordered table-hover'>
<thead>
    <tr><th>#</th><th>Nome</th><th>Email</th>
    </thead><tbody>
        @foreach ($usuarios as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->name}}</td>
            <td>{{$p->email}}</td>
        </tr>
        @endforeach
        </tbody>
</table>
@stop
