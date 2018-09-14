@extends('layouts.app')
@section('content')
<!-- @if(empty($dados)) -->
<div class='alert alert-danger'>
Erro dados nulos
</div>
<!-- @else -->
<h1>Editar curso</h1>
<form action='/curso/{{$dados->id}}' method='post'>
{{ csrf_field() }}
{{ method_field('PUT') }}
 <div class='form-group'>
                   <label>id</label>
                   <input name='id' value='{{$dados->id}}' class='form-control'/>
                </div>
 <div class='form-group'>
                   <label>nome</label>
                   <input name='nome' value='{{$dados->nome}}' class='form-control'/>
                </div>
 <div class='form-group'>
                   <label>situacao</label>
                   <input name='situacao' value='{{$dados->situacao}}' class='form-control'/>
                </div>
 <div class='form-group'>
                   <label>created_at</label>
                   <input name='created_at' value='{{$dados->created_at}}' class='form-control'/>
                </div>
 <div class='form-group'>
                   <label>updated_at</label>
                   <input name='updated_at' value='{{$dados->updated_at}}' class='form-control'/>
                </div>
<button type='submit'
class='btn btn-primary btn-block'>Alterar</button>
</form>
@endif
@stop
