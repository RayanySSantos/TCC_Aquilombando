@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Aroeira/comida/p1.JPG') }}');">
    <div class="secao-capa-conteudo">
        <h1>Aroeira: Cozinha de Raiz e Celebração</h1>
        <span>Culinária</span>
    </div>
</section>

<section class="culinaria-hero">
    <div class="culinaria-hero-container">
        <div class="culinaria-hero-texto">
            <h2 class="secao-titulo">Aroeira: Cozinha de Raiz e Celebração</h2>

            <p>A culinária da Comunidade Quilombola de Aroeira reflete diretamente a agricultura familiar praticada no território, utilizando ingredientes frescos e diversificados produzidos localmente. Esses alimentos dão origem a pratos que carregam histórias, tradições e saberes construídos ao longo do tempo, revelando a profunda relação entre a terra, a alimentação e a identidade cultural da comunidade.</p>

            <p>Entre os pratos mais valorizados estão o bolo de puba, o bolo de aipim, o caldo de frango, o pirão de frango caipira, o frango cheio e o frango caipira. Todas essas receitas são transmitidas de geração em geração e representam um elo entre o passado e o presente, preservando modos de preparo, sabores e significados que fazem parte da memória coletiva do quilombo.</p>

            <p>A preparação dos alimentos ocorre, em muitos momentos, de forma coletiva, especialmente em encontros familiares e celebrações comunitárias. Cozinhar, em Aroeira, é um ato de partilha, aprendizado e preservação cultural, fortalecendo os laços entre os moradores. Mais do que alimento, a culinária simboliza resistência e afirmação identitária, reafirmando o orgulho, a história e a continuidade dos valores ancestrais da comunidade.</p>


        </div>

        <div class="culinaria-hero-galeria">
            <div class="culinaria-foto"><img src="{{ asset('images/Aroeira/comida/p1.JPG') }}" alt="Aroeira 1"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Aroeira/comida/r.jpg') }}" alt="Aroeira 2"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Aroeira/comida/p8.jpg') }}" alt="Aroeira 3"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Aroeira/comida/p4.JPG') }}" alt="Aroeira 4"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Aroeira/comida/p9.png') }}" alt="Aroeira 5"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Aroeira/comida/p6.jpg') }}" alt="Aroeira 6"></div>
        </div>
    </div>
</section>
@endsection
