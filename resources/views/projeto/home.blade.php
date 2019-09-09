
@extends('layouts.app')
@section('content')
    <a href='docs/Modelo_projeto_pesquisa_escolar.docx'>Modelo de projeto de pesquisa escolar</a><br>
    <a href='docs/Modelo_projeto_iniciacao_cientifica.docx'>Modelo de projeto de iniciação científica</a><br>
    <a href='docs/Orientacoes_inicicao_cientifica.doc'>Orientaçãoes para projetos de iniciação científica</a><br>
    <a href='docs/Modelo_banner_novo.ppt'>Modelo de banner</a><br>
    <h1>Meus projetos

        {{--@if(count($projeto)==0)--}}
            <a class='btn btn-primary' href='{{action("ProjetoController@create")}}'>
                Enviar projeto
                </a>
        {{--@endif--}}
    </h1>
<table class='table table-striped table-bordered table-hover'>
    <tr><th>Situação</th><th>Nome</th><th>Curso</th><th>Sala</th><th>Box</th><th>Turma</th><th>Orientadores</th><th>Arquivo</th><th colspan='4'>Ações</th>
        @foreach ($projeto as $d)
            <tr>
            <td>{{$d->status}}</td>
            <!-- <td>{{$d->id}}</td> -->
            <td>{{$d->nome}}</td>
            <td>{{$d->curso["nome"]}}</td>
            <td>{{$d->sala}}</td>
            <td>{{$d->box}}</td>
            <td>{{$d->turma}}</td>
            <!--<td>{{$d->integrantes}}</td>-->
            <td>{{$d->orientadores}}</td>
           <!--  <td>{{$d->email}}</td> -->
            <td><a class="btn btn-outline-primary" href="{{$d->arquivo}}">Download</a></td>
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
    {{--
    <td>
        <a class='btn btn-secondary' href='{{action('MapaController@showBlocoCurso', $d->id)}}'>
            <i class='material-icons'>Escolher box</i>
        </a>
    </td>--}}
    </tr>
@endforeach
</table>
@stop
