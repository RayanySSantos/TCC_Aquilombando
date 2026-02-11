@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.80), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Vargem Alta/comida/pamonha.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Vargem Alta: Sabores da Terra e da Memória</h1>
        <span>Culinária</span>
    </div>
</section>

<section class="culinaria-hero">
    <div class="culinaria-hero-container">
        <div class="culinaria-hero-texto">

            <p>A culinária da Comunidade Quilombola de Vargem Comprida é uma expressão viva de sua história, identidade e ancestralidade. Os ingredientes cultivados localmente, como mandioca, umbu-cajá, feijão, manga e outros frutos nativos, são transformados em pratos que atravessam gerações, mantendo viva a memória coletiva e fortalecendo a relação entre a terra e a alimentação. Esses alimentos refletem o modo de vida tradicional da comunidade e revelam saberes transmitidos ao longo do tempo.</p>

            <p>Entre os pratos mais tradicionais destacam-se a pamonha, a paçoca de gergelim, a canjica, o cortado de maxixe com nata, além da produção de doces e geleias artesanais. A fábrica de farinha ocupa papel central nesse processo, funcionando como espaço de trabalho coletivo, colaboração comunitária e autonomia produtiva. É nesse ambiente que técnicas tradicionais são preservadas e compartilhadas, fortalecendo os vínculos sociais e culturais da comunidade.</p>

            <p>O preparo dos alimentos ocorre, em muitos momentos, de forma coletiva, reunindo famílias e diferentes gerações em um espaço de troca de saberes, convivência e celebração. Durante essas atividades, receitas, histórias e técnicas são transmitidas oralmente, transformando a culinária em um importante símbolo de resistência cultural e afirmação identitária. Preservar essas práticas significa manter viva a memória da comunidade, fortalecer o orgulho de suas origens e garantir que os saberes ancestrais continuem sendo transmitidos às futuras gerações.</p>


        </div>

        <div class="culinaria-hero-galeria">
            <div class="culinaria-foto"><img src="{{ asset('images/Vargem Alta/comida/p1.jpeg') }}" alt="Vargem Alta 1"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Vargem Alta/comida/p2.jpeg') }}" alt="Vargem Alta 2"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Vargem Alta/comida/p3.jpeg') }}" alt="Vargem Alta 3"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Vargem Alta/comida/p4.jpeg') }}" alt="Vargem Alta 4"></div>
        </div>
    </div>
</section>
@endsection
