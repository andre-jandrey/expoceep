<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mapa da sala</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    .box, .vazio, .ocupado{
        background-image:url('/img/box2.png');
        background-size: 100% 100%;
        background-repeat: no-repeat;
        width: 100%;
        min-height: 70px;
        }
    .ocupado{
        background-image: url('/img/ocupado.png')
    }
    .vazio{
        background-image:none;
    }
    a {display: block; line-height: 150px; text-align: center}
    .sala{ background: #fff; border: solid 3px #000;        background-image:url('/img/mapa_bloco8_box.png');
        background-size: 100% 100%;
        background-repeat: no-repeat;}
    </style>
</head>
<body>
    <div class="container">
    <h1 class="text-center alert alert-info">Escolha do box</h1>



<h2>Para o seu curso/área estão disponíveis os boxes abaixo.</h2>
<blockquote class="blockquote">
    <p class="mb-2 mt-2">Clique em um box para escolher. Atenção box marcados com um "X"
    estão indisponíveis pois já foram escolhidos por outros alunos.</p>
</blockquote>
        <div class="row">

            <div class="col-12 sala">
            <div class="row">
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
            </div>
            <div class="row">
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
            </div>
            <div class="row">
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
            </div>
            <div class="row">
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
            </div>
            <div class="row">
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
            </div>
            <div class="row">
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
            </div>
            <div class="row">
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
            </div>
            <div class="row">
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><a href='{{ in_array(1, $boxes) ? '' :"/projeto/edit/$projeto_id/box/1"}}'><div class="col {{ in_array(1, $boxes) ? 'ocupado' :'box'}}"></div></a></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><a href='{{ in_array(5, $boxes) ? '' :"/projeto/edit/$projeto_id/box/5"}}'><div class="col {{ in_array(5, $boxes) ? 'ocupado' :'box'}}"></div></a></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
            </div>

            <div class="row">
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><a href='{{ in_array(2, $boxes) ? '' :"/projeto/edit/$projeto_id/box/2"}}'><div class="col {{ in_array(2, $boxes) ? 'ocupado' :'box'}}"></div></a></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><a href='{{ in_array(6, $boxes) ? '' :"/projeto/edit/$projeto_id/box/6"}}'><div class="col {{ in_array(6, $boxes) ? 'ocupado' :'box'}}"></div></a></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
            </div>
            <div class="row">
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
            </div>
            <div class="row">
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
            </div>
            <div class="row">
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><a href='{{ in_array(3, $boxes) ? '' :"/projeto/edit/$projeto_id/box/3"}}'><div class="col {{ in_array(3, $boxes) ? 'ocupado' :'box'}}"></div></a></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><a href='{{ in_array(7, $boxes) ? '' :"/projeto/edit/$projeto_id/box/7"}}'><div class="col {{ in_array(7, $boxes) ? 'ocupado' :'box'}}"></div></a></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
            </div>
            <div class="row">
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><a href='{{ in_array(4, $boxes) ? '' :"/projeto/edit/$projeto_id/box/4"}}'><div class="col {{ in_array(4, $boxes) ? 'ocupado' :'box'}}"></div></a></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><a href='{{ in_array(8, $boxes) ? '' :"/projeto/edit/$projeto_id/box/8"}}'><div class="col {{ in_array(8, $boxes) ? 'ocupado' :'box'}}"></div></a></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
            </div>
        </div>
    </div>
</body>
</html>
