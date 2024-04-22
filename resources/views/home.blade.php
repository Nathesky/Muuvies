@extends('layout')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Filmes em Destaque</h2>
            <div class="card">
                <img src="/images/segredoanimais.webp" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Os segredos dos animais</h5>
                    <p class="card-text">O touro Otis gosta de cantar e tocar como todos os outros animais do celeiro quando o agricultor está fora. No entanto, o bovino despreocupado deve encontrar coragem para ser um líder quando, inesperadamente, ele se encontra em uma posição de grande responsabilidade.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2>Filmes Recentes</h2>
            <div class="card">
                <img src="/images/vacatussa.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Nem que a vaca tussa</h5>
                    <p class="card-text">A fazenda Caminho do Paraíso está em pânico, pois uma ação de despejo ameaça acabar com o local. Temendo ir para o matadouro, os animais da fazenda decidem ajudar a dona a conseguir a quantia necessária para pagar a hipoteca. O alvo escolhido pelo grupo é o perigoso bandido Alameda Slim, que tem uma grande recompensa reservada para quem capturá-lo.</p>
                </div>
            </div>
        </div>
    </div>

    <hr> <!-- Adicionando uma linha horizontal para separar os filmes existentes dos novos -->

    <h2 style="background-color: white; text-align: center">Todos os Filmes</h2>
    <div class="container mt-5">
    <div class="row">
        @foreach($filmes as $filme)
        <div class="col-md-6">
            <div class="card">
                <img src="{{ asset($filme->imagem) }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $filme->titulo }}</h5>
                    <p class="card-text">{{ $filme->sinopse }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
