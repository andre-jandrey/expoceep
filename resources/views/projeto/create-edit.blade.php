@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Informações do projeto</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if ($errors->any())
                    <div class='alert alert-danger'>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if (isset($projeto))
                    <form method="post" action="{{route('projeto.update', ['id'=> $projeto ->id])}}" enctype="multipart/form-data">
                        {!! method_field('PUT')!!}
                        @else
                        <form action="{{route('projeto.store')}}" method='post'>
                        @endif

                        {{ csrf_field() }}
                            <div class='form-group'>
                                <label>Nome do projeto</label>
                                <input name='nome' value='{{$projeto->nome or old('nome')}}' class='form-control'/>
                            </div>
                            <div class='form-group'>
                            <label>Selecione o curso</label>
                            <select name="curso_id" class='form-control'>
                            <option value="">Escolha</option>
                            @foreach ($cursos as $c)
                                <option value="{{$c->id}}" {{ (old("curso_id") == $c->id ? "selected":"") }}

                                @if(isset($projeto) && ($c->id == $projeto->idcurs0))
                                    selected
                                @endif

                                >{{$c->nome}}
                            </option>
                            @endforeach
                            </select>
                            </div>
                            <div class='form-group'>
                                <label>Selecione a turma</label>
                                <select name='turma' class='form-control'>
                                    <option value="">Escolha</option>
                                    <option {{ (old("turma") == "1° Ano A" ? "selected":"") }} value="1° Ano A">1° Ano A</option>
                                    <option {{ (old("turma") == "2° Ano A" ? "selected":"") }} value="2° Ano A">2° Ano A</option>
                                    <option {{ (old("turma") == "3° Ano A" ? "selected":"") }} value="3° Ano A">3° Ano A</option>
                                    <option {{ (old("turma") == "4° Ano A" ? "selected":"") }} value="4° Ano A">4° Ano A</option>

                                    <option {{ (old("turma") == "1° Ano B" ? "selected":"") }} value="1° Ano B">1° Ano B</option>
                                    <option {{ (old("turma") == "2° Ano B" ? "selected":"") }} value="2° Ano B">2° Ano B</option>
                                    <option {{ (old("turma") == "3° Ano B" ? "selected":"") }} value="3° Ano B">3° Ano B</option>
                                    <option {{ (old("turma") == "4° Ano B" ? "selected":"") }} value="4° Ano B">4° Ano B</option>

                                    <option {{ (old("turma") == "1° Semestre" ? "selected":"") }} value="1° Semestre">1° Semestre</option>
                                    <option {{ (old("turma") == "2° Semestre" ? "selected":"") }} value="2° Semestre">2° Semestre</option>
                                    <option {{ (old("turma") == "3° Semestre" ? "selected":"") }} value="3° Semestre">3° Semestre</option>
                                    <option {{ (old("turma") == "4° Semestre" ? "selected":"") }} value="4° Semestre">4° Semestre</option>
                                </select>
                                <!-- <input value='{{$projeto->turma or old('turma')}}' class='form-control'/> -->
                            </div>
                            <div class='form-group'>
                                <label>Integrantes</label>
                                <textarea name='integrantes' class='form-control'>{{$projeto->integrantes or old('integrantes')}}</textarea>                             </div>
                            <div class='form-group'>
                                <label>Orientadores</label>
                                <textarea name='orientadores' class='form-control'>{{$projeto->orientadores or old('orientadores')}}</textarea>
                            </div>
                            <div class='form-group'>
                                <label>Email de contato</label>
                                <input name='email' type="email" value='{{$projeto->email or old('email')}}' class='form-control'/>
                            </div>
                            <div class='form-group'>
                                <label>Selecione o arquivo</label>
                                <input name='arquivo' type='file' value='{{$projeto->arquivo or old('arquivo')}}' class='form-control'/>
                            </div>
                            @if (isset($dados))
                                <button type="submit" class="btn btn-primary btn-block">Alterar</button>
                            @else
                                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                            @endif
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
