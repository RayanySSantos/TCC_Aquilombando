@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.80), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Passagem/comida/farofa.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Passagem de Areia: Culinária de Partilha e Afeto</h1>
        <span>Culinária</span>
    </div>
</section>

<section class="culinaria-hero">
    <div class="culinaria-hero-container">
        <div class="culinaria-hero-texto">

            <p>A culinária da Comunidade Quilombola de Passagem de Areia é uma expressão direta da agricultura familiar e da ancestralidade que sustenta o modo de vida local. Os ingredientes cultivados no próprio território, como palma, mandioca, manga, caju e batata-doce, são transformados em pratos que atravessam gerações, preservando a memória coletiva e reafirmando a profunda relação entre alimentação, território e identidade cultural. Cada alimento carrega saberes acumulados ao longo do tempo e reflete a história de resistência e pertencimento da comunidade.</p>

            <p>Entre os pratos mais tradicionais destacam-se o cortado de palma, a maniçoba, o chimango, a farofa de boi e a farofa de frango, preparados a partir de técnicas transmitidas oralmente, sobretudo pelas mulheres mais velhas. Esses modos de preparo preservam sabores característicos e também significados simbólicos e afetivos, ligados às vivências familiares, às celebrações comunitárias e à memória dos antepassados.</p>

            <p>O preparo dos alimentos ocorre, em grande parte, de forma coletiva, reunindo famílias em momentos de partilha, aprendizado e celebração. Durante essas atividades, os saberes culinários são transmitidos às novas gerações, fortalecendo os laços comunitários e garantindo a continuidade das tradições alimentares. Mais do que sustento, a culinária de Passagem de Areia representa um símbolo de resistência cultural e afirmação da identidade quilombola, assegurando que seus saberes e sabores continuem vivos ao longo do tempo.</p>


        </div>

        <div class="culinaria-hero-galeria">
            <div class="culinaria-foto"><img src="{{ asset('images/Passagem/comida/p1.jpeg') }}" alt="Passagem de Areia 1"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Passagem/comida/p2.jpeg') }}" alt="Passagem de Areia 2"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Passagem/comida/p3.jpeg') }}" alt="Passagem de Areia 3"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Passagem/comida/p4.jpeg') }}" alt="Passagem de Areia 4"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Passagem/comida/p5.jpeg') }}" alt="Passagem de Areia 5"></div>
        </div>
    </div>
</section>
@endsection
