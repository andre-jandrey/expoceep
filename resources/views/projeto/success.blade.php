
@extends('layouts.app')
@section('content')
    <h1 class="text-center alert alert-success"> Parabéns! Seu projeto foi incluído.</h1>

    <br>

    <h2>Agora você pode escolher o local de exposição.</h2>
    <blockquote class="blockquote">
        <p class="mb-5 mt-5">Você poderá escolher seu box de exposição dentro de uma área pré estabelecida para seu curso. Escolha primeiro uma sala dentre as disponíveis e depois escolha o box que deseja.</p>
    </blockquote>
    <div class="text-center">
        <a href="/mapa/bloco" class="btn btn-lg btn-large btn-danger"> Escolher meu box agora </a>
    </div>
    @stop
