
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
        background-image:url('/img/box1.png');
        background-size: 100% 100%;
        background-repeat: no-repeat;
        width: 100%;
        min-height: 150px;
        }
    .ocupado{
        background-image: url('/img/ocupado.png')
    }
    .vazio{
        background-image:url('/img/vazio.png');
    }
    a {display: block; line-height: 150px; text-align: center}
    .sala{ background: #fff; border: solid 3px #000;}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 sala">
                <div class="row">

                <div class="col"><a href='{{ in_array(3, $boxes) ? '' :"/projeto/edit/$projeto_id/box/3"}}'><div class="col {{ in_array(3, $boxes) ? 'ocupado' :'box'}}"></div></a></div>
                <div class="col"><a href='{{ in_array(4, $boxes) ? '' :"/projeto/edit/$projeto_id/box/4"}}'><div class="col {{ in_array(4, $boxes) ? 'ocupado' :'box'}}"></div></a></div>
                <div class="col"><a href='{{ in_array(5, $boxes) ? '' :"/projeto/edit/$projeto_id/box/5"}}'><div class="col {{ in_array(5, $boxes) ? 'ocupado' :'box'}}"></div></a></div>
                </div>
                <div class="row">
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                <div class="col"><div class="col vazio"></div></div>
                </div>
                <div class="row">
                <div class="col"><a href='{{ in_array(2, $boxes) ? '' :"/projeto/edit/$projeto_id/box/2"}}'><div class="col {{ in_array('2', $boxes) ? 'ocupado' :'box'}}"></div></a></div>
                <div class="col"><a href='{{ in_array(1, $boxes) ? '' :"/projeto/edit/$projeto_id/box/1"}}'><div class="col {{ in_array('1', $boxes) ? 'ocupado' :'box'}}"></div></a></div>
                <div class="col"><div class="col vazio"></div></div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
