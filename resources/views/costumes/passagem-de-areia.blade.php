@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Passagem/festejos/4.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Passagem de Areia: Festejos e Encontros</h1>
        <span>Costumes e Tradições</span>
    </div>
</section>

<section class="costumes-hero">
    <div class="costumes-hero-container">
        <div class="costumes-hero-texto">

            <p>Os costumes e tradições da Comunidade Quilombola de Passagem de Areia ocupam um lugar central na vida coletiva, expressando a memória, a ancestralidade e o sentimento de pertencimento ao território. Essas práticas culturais são transmitidas entre gerações por meio da convivência cotidiana, da oralidade e da participação comunitária, permitindo que os saberes tradicionais permaneçam vivos e significativos.</p>

            <p>Entre as manifestações culturais mais marcantes destaca-se o reisado, uma das tradições mais vivas e significativas da comunidade. Essa prática reúne moradores de diferentes idades em momentos coletivos de fé, celebração e convivência, fortalecendo os laços comunitários. O reisado é vivenciado como um espaço de encontro entre gerações, no qual crianças, jovens e adultos compartilham experiências, saberes e memórias que atravessam o tempo.</p>

            <p>Durante o cortejo, os participantes utilizam trajes coloridos, entoam cantos, recitam versos e fazem uso de instrumentos que conduzem a celebração. Mais do que uma manifestação religiosa, o reisado representa resistência cultural e afirmação da identidade quilombola, conectando o presente às heranças deixadas pelos antepassados. Ao ocupar os espaços da comunidade, essa tradição reafirma valores coletivos, preserva a ancestralidade afro-brasileira e fortalece a memória cultural de Passagem de Areia.</p>

        </div>

        <div class="costumes-hero-galeria">
            <div class="costumes-foto"><img src="{{ asset('images/Passagem/festejos/f1.jpeg') }}" alt="Passagem de Areia 1"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Passagem/festejos/f2.jpeg') }}" alt="Passagem de Areia 2"></div>
        </div>
    </div>
</section>
@endsection
