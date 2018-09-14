@extends('layouts.app')
@section('content')
<!-- @if(empty($dados)) -->
<div class='alert alert-danger'>
Erro dados nulos
</div>
<!-- @else -->
<h1>Editar projeto</h1>
<form action='/projeto/{{$dados->id}}' method='post'>
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
                   <label>curso_id</label>
                   <input name='curso_id' value='{{$dados->curso_id}}' class='form-control'/>
                </div>
 <div class='form-group'>
                   <label>idusuario</label>
                   <input name='idusuario' value='{{$dados->idusuario}}' class='form-control'/>
                </div>
 <div class='form-group'>
                   <label>box</label>
                   <input name='box' value='{{$dados->box}}' class='form-control'/>
                </div>
 <div class='form-group'>
                   <label>turma</label>
                   <input name='turma' value='{{$dados->turma}}' class='form-control'/>
                </div>
 <div class='form-group'>
                   <label>integrantes</label>
                   <input name='integrantes' value='{{$dados->integrantes}}' class='form-control'/>
                </div>
 <div class='form-group'>
                   <label>orientadores</label>
                   <input name='orientadores' value='{{$dados->orientadores}}' class='form-control'/>
                </div>
 <div class='form-group'>
                   <label>email</label>
                   <input name='email' value='{{$dados->email}}' class='form-control'/>
                </div>
 <div class='form-group'>
                   <label>arquivo</label>
                   <input name='arquivo' value='{{$dados->arquivo}}' class='form-control'/>
                </div>
 <div class='form-group'>
                   <label>data_hora</label>
                   <input name='data_hora' value='{{$dados->data_hora}}' class='form-control'/>
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