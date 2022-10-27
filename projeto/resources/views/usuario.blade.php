<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Funcionário</title>
</head>
<body>
    <h1>Página Funcionário</h1>
    {{ date("d/m/Y") }}
    <hr>
    <p>Olá {{$nome}} seu salário é {{$salario}}</p>

    @php
        $endereco = "Rua das goiabas 26";
        $frutas = ["Pitaya","Máracuja","Kiwi","Morango","Abacaxi"];
    @endphp

    {{-- Isso é um comentário usando sintaxe Blade (CRTL;) --}}
    @if ($salario>=1000)
        <p>Você receberá um bônus de {{$salario *0.2}} Dinheiros</p>
    @else
        <p>Infelizmente você é pobre</p>
    @endif
    <ul>
        @foreach ($frutas as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
</body>
</html>