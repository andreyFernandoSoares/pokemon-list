<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokemons</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style type="text/css">
        #card {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <main class="container ">
        <div class="jumbotron">
            <h1 class="display-3">Pokemons</h1>
        </div>
        <div class="row">
            @foreach ($pokemons as $poke)
                <div class="col-sm" >
                    <ul class="list-group" id="card">
                        <li class="list-group-item list-group-item-action active">{{$poke->name}}</li>
                        <li class="list-group-item list-group-item-secondary"><img src={{$poke->img}} /></li>
                    </ul>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>