@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.80), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Lagoa dos Anjos/comida/cha.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Lagoa dos Anjos: Sabores de União Comunitária</h1>
        <span>Culinária</span>
    </div>
</section>

<section class="culinaria-hero">
    <div class="culinaria-hero-container culinaria-hero-container--top">
        <div class="culinaria-hero-texto">

            <p>A culinária da Comunidade Quilombola de Lagoa dos Anjos é uma expressão viva de sua cultura e da relação profunda com o território. Os alimentos produzidos na agricultura familiar, como frutas, raízes, hortaliças e grãos, compõem a base das receitas tradicionais e revelam a ligação entre a terra e a mesa. A alimentação reflete a identidade coletiva e o cuidado com o ambiente, preservando saberes construídos ao longo das gerações.</p>

            <p>Entre os pratos mais apreciados estão o bolo frito (01), o chá de “bicha” (02), a paçoca de gergelim (03), o beiju de coco com rapadura (04), o pirão de frango caipira (05) e a paçoca de carne seca (06). Essas receitas são transmitidas de geração em geração e carregam memórias afetivas que reforçam o convívio familiar e a prática da partilha nos lares quilombolas. Cada preparo representa um gesto de valorização da tradição e da ancestralidade.</p>

            <p>O bolo frito é preparado com a massa de polvilho hidratada com água quente e misturada aos ovos até atingir o ponto ideal. Depois de sovada, a massa é modelada e frita lentamente em óleo aquecido, garantindo que cozinhe por dentro e fique dourada por fora. Muito presente em cafés e encontros familiares, simboliza acolhimento e tradição.</p>

            <p>O chá de “bicha” é feito com uma combinação de ervas frescas, como hortelã, gengibre, manjericão, capim-santo e alfavaca, fervidas lentamente para liberar aromas e propriedades. Servido quente, geralmente adoçado e com toque de limão, representa cuidado com a saúde e saberes tradicionais ligados às plantas medicinais.</p>

            <p>A paçoca de gergelim é preparada com as sementes torradas e socadas no pilão, misturadas à farinha, rapadura e uma pitada de sal até formar uma massa firme. O uso do pilão reforça a ancestralidade e a preservação das técnicas tradicionais de preparo.</p>

            <p>O beiju de coco com rapadura é feito com a tapioca peneirada e assada na chapa, recebendo como recheio o melado de rapadura misturado ao coco ralado. Dobrado ainda quente, é um alimento que une sabor e memória, sendo presença constante nos momentos de convivência familiar.</p>

            <p>O pirão de frango caipira é preparado a partir do caldo do frango cozido com temperos tradicionais, ao qual se acrescenta farinha de mandioca até alcançar textura cremosa. Servido com o frango bem temperado, é prato que simboliza fartura, celebração e união comunitária.</p>

            <p>A paçoca de carne seca é feita com a carne previamente dessalgada, frita com toucinho e temperos, depois socada no pilão com farinha até adquirir textura homogênea. Muito apreciada em refeições coletivas, representa resistência cultural e aproveitamento integral dos alimentos.</p>

            <p>Cozinhar, na comunidade, é também celebrar a vida. Os alimentos preparados em família fortalecem os vínculos comunitários e transformam a cozinha em espaço de união, aprendizado e troca de saberes. Mais do que nutrir, a culinária de Lagoa dos Anjos simboliza resistência cultural e pertencimento, garantindo que os sabores, as histórias e os valores do povo quilombola continuem vivos e sejam transmitidos às futuras gerações.</p>

        </div>

        <div class="culinaria-hero-galeria culinaria-hero-galeria--vertical">
            <div class="culinaria-foto"><span class="culinaria-foto-numero">01</span><img src="{{ asset('images/Lagoa dos Anjos/comida/p1.jpeg') }}" alt="Lagoa dos Anjos 1"></div>
            <div class="culinaria-foto"><span class="culinaria-foto-numero">02</span><img src="{{ asset('images/Lagoa dos Anjos/comida/p2.jpeg') }}" alt="Lagoa dos Anjos 2"></div>
            <div class="culinaria-foto"><span class="culinaria-foto-numero">03</span><img src="{{ asset('images/Lagoa dos Anjos/comida/p3.jpeg') }}" alt="Lagoa dos Anjos 3"></div>
            <div class="culinaria-foto"><span class="culinaria-foto-numero">04</span><img src="{{ asset('images/Lagoa dos Anjos/comida/p4.jpeg') }}" alt="Lagoa dos Anjos 4"></div>
            <div class="culinaria-foto"><span class="culinaria-foto-numero">05</span><img src="{{ asset('images/Lagoa dos Anjos/comida/p5.jpeg') }}" alt="Lagoa dos Anjos 5"></div>
            <div class="culinaria-foto"><span class="culinaria-foto-numero">06</span><img src="{{ asset('images/Lagoa dos Anjos/comida/p6.jpeg') }}" alt="Lagoa dos Anjos 6"></div>
        </div>
    </div>
</section>
@endsection
