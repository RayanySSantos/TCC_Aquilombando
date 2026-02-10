@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Lagoa dos Anjos/comida/p1.jpeg') }}');">
    <div class="secao-capa-conteudo">
        <h1>Lagoa dos Anjos: Sabores de União Comunitária</h1>
        <span>Culinária</span>
    </div>
</section>

<section class="culinaria-hero">
    <div class="culinaria-hero-container">
        <div class="culinaria-hero-texto">
            <h2 class="secao-titulo">Lagoa dos Anjos: Sabores de União Comunitária</h2>

            <p>A culinária da Comunidade Quilombola de Lagoa dos Anjos é uma expressão viva de sua cultura e da relação profunda com o território. Os alimentos produzidos na agricultura familiar, como frutas, raízes, hortaliças e grãos, compõem a base das receitas tradicionais e revelam a ligação entre a terra e a mesa. A alimentação reflete a identidade coletiva e o cuidado com o ambiente, preservando saberes construídos ao longo das gerações.</p>

            <p>Entre os pratos mais apreciados estão a paçoca de gergelim, o pirão, o frango caipira, a tapioca de coco com rapadura, o chá de “bicha”, a paçoca de carne seca e o bolo frito. Essas receitas são transmitidas de geração em geração e carregam memórias afetivas que reforçam o convívio familiar e a prática da partilha nos lares quilombolas. Cada preparo representa um gesto de valorização da tradição e da ancestralidade.</p>

            <p>Cozinhar, na comunidade, é também celebrar a vida. Os alimentos preparados em família fortalecem os vínculos comunitários e transformam a cozinha em espaço de união, aprendizado e troca de saberes. Mais do que nutrir, a culinária de Lagoa dos Anjos simboliza resistência cultural e pertencimento, garantindo que os sabores, as histórias e os valores do povo quilombola continuem vivos e sejam transmitidos às futuras gerações.</p>


        </div>

        <div class="culinaria-hero-galeria">
            <div class="culinaria-foto"><img src="{{ asset('images/Lagoa dos Anjos/comida/p1.jpeg') }}" alt="Lagoa dos Anjos 1"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Lagoa dos Anjos/comida/p2.jpeg') }}" alt="Lagoa dos Anjos 2"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Lagoa dos Anjos/comida/p3.jpeg') }}" alt="Lagoa dos Anjos 3"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Lagoa dos Anjos/comida/p4.jpeg') }}" alt="Lagoa dos Anjos 4"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Lagoa dos Anjos/comida/p5.jpeg') }}" alt="Lagoa dos Anjos 5"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Lagoa dos Anjos/comida/p6.jpeg') }}" alt="Lagoa dos Anjos 6"></div>
        </div>
    </div>
</section>
@endsection
