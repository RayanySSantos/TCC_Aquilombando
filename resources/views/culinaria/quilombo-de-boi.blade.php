@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Boi/comida/p1.jpeg') }}');">
    <div class="secao-capa-conteudo">
        <h1>Quilombo de Boi: Receitas que Mantêm a Resistência</h1>
        <span>Culinária</span>
    </div>
</section>

<section class="culinaria-hero">
    <div class="culinaria-hero-container">
        <div class="culinaria-hero-texto">
            <h2 class="secao-titulo">Quilombo de Boi: Receitas que Mantêm a Resistência</h2>

            <p>A culinária da Comunidade Quilombola de Boi reflete diretamente a agricultura familiar e a forte presença da ancestralidade no cotidiano dos moradores. Os alimentos cultivados nos roçados da própria comunidade constituem a base das receitas tradicionais, garantindo uma alimentação saudável e profundamente conectada ao território. Esses saberes culinários, construídos ao longo do tempo, atravessam gerações e fortalecem a identidade cultural, revelando a relação entre alimento, memória e pertencimento.</p>

            <p>Entre os pratos mais representativos destacam-se a feijoada, o doce de umbu, o bolo de milho e o picado de palma, preparações que carregam histórias, afetos e significados culturais profundos. As receitas são transmitidas, principalmente, pela oralidade, pelas mulheres mais velhas da comunidade, que ensinam não apenas os ingredientes e os modos de preparo, mas também os tempos, os rituais e os sentidos que envolvem cada prato. Dessa forma, os sabores preservam a história e a resistência do povo quilombola.</p>

            <p>A preparação dos alimentos ocorre, em grande parte, de maneira coletiva, especialmente em encontros familiares, festas e celebrações comunitárias. Nesses momentos, a cozinha se transforma em espaço de aprendizado, convivência e transmissão de valores como cooperação, respeito e solidariedade. Mais do que uma prática voltada à nutrição, a culinária de Boi representa um símbolo de resistência cultural e afirmação identitária, mantendo viva a memória dos antepassados e garantindo a continuidade dos saberes alimentares para as futuras gerações.</p>


        </div>

        <div class="culinaria-hero-galeria">
            <div class="culinaria-foto"><img src="{{ asset('images/Boi/comida/p1.jpeg') }}" alt="Quilombo de Boi 1"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Boi/comida/p2.jpeg') }}" alt="Quilombo de Boi 2"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Boi/comida/p3.jpeg') }}" alt="Quilombo de Boi 3"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Boi/comida/p4.jpeg') }}" alt="Quilombo de Boi 4"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Boi/comida/p5.jpeg') }}" alt="Quilombo de Boi 5"></div>
            <div class="culinaria-foto"><img src="{{ asset('images/Boi/comida/p7.jpeg') }}" alt="Quilombo de Boi 6"></div>
        </div>
    </div>
</section>
@endsection
