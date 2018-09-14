@extends('layouts.app')
@section('content')
<h1>{{isset($curso) ? 'Editar curso' : 'Cadastrar curso'}}</h1>
@if ($errors->any())
<div class='alert alert-danger'>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if (isset($curso))
<form method="post" action="{{route('curso.update', ['id'=> $curso ->id])}}" enctype="multipart/form-data">
    {!! method_field('PUT')!!}
    @else
    <form action="{{route('curso.store')}}" method='post'>
    @endif

    {{ csrf_field() }}
        <div class='form-group'>
            <label>nome</label>
            <input name='nome' value='{{$curso->nome or old('nome')}}' class='form-control'/>
        </div>
@if (isset($dados))
    <button type="submit" class="btn btn-primary btn-block">Alterar</button>
@else
    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
@endif
</form>
@stop
