@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.80), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Vargem Comprida/comida/p7.jpeg') }}');">
    <div class="secao-capa-conteudo">
        <h1>Vargem Comprida: Tradições na Cozinha Quilombola</h1>
        <span>Culinária</span>
    </div>
</section>

<section class="culinaria-hero">
    <div class="culinaria-hero-container">
        <div class="culinaria-hero-texto">

            <p>A culinária da Comunidade Quilombola de Vargem Comprida é um reflexo direto da agricultura familiar e da ancestralidade que sustenta o modo de vida local. Os alimentos cultivados no próprio território, como feijão, milho, mandioca, batata-doce, maxixe, frutas e hortaliças, são transformados em receitas cheias de significado e história, garantindo sabor, frescor e vínculo com a terra. Esses alimentos expressam saberes acumulados ao longo das gerações e reafirmam a identidade cultural da comunidade.</p>

            <p>Entre os pratos mais tradicionais destacam-se o beiju debaixo da farinha, o polvilho assado na brasa, a paçoca de gergelim, o chouriço de sangue de porco, o pirão de maxixe, o requeijão, o escaldado, a farofa doce, o liordino, o mingau de puba e a galinhada, além de doces, geleias e sucos artesanais feitos com frutas locais. Cada receita carrega a memória coletiva e os saberes transmitidos pelos antepassados, preservando modos de preparo que atravessam o tempo.</p>

            <p>O preparo dos alimentos ocorre, muitas vezes, de forma coletiva, reunindo famílias em momentos de troca, aprendizado e celebração. Durante essas atividades, as tradições culinárias são ensinadas aos mais jovens, fortalecendo os laços comunitários e garantindo a continuidade cultural. Mais do que sustento, a culinária de Vargem Comprida representa resistência, orgulho e pertencimento, mantendo viva a memória dos antepassados e assegurando a transmissão dos saberes para as futuras gerações.</p>


        </div>

        <div class="culinaria-hero-galeria">
            <div class="culinaria-foto"><img src="{{ asset('images/Vargem Comprida/comida/p7.jpeg') }}" alt="Vargem Comprida 1"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Vargem Comprida/comida/p2.jpeg') }}" alt="Vargem Comprida 2"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Vargem Comprida/comida/p3.jpeg') }}" alt="Vargem Comprida 3"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Vargem Comprida/comida/p8.jpeg') }}" alt="Vargem Comprida 4"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Vargem Comprida/comida/p5.jpeg') }}" alt="Vargem Comprida 5"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Vargem Comprida/comida/p6.jpeg') }}" alt="Vargem Comprida 6"></div>
        </div>
    </div>
</section>
@endsection
