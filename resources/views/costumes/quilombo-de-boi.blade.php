@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Boi/festejos/f1.jpg') }}');">
    <div class="secao-capa-conteudo">
        <h1>Quilombo de Boi: Costumes, Fé e Celebração</h1>
        <span>Costumes e Tradições</span>
    </div>
</section>

<section class="costumes-hero">
    <div class="costumes-hero-container">
        <div class="costumes-hero-texto">
            <h2 class="secao-titulo">Quilombo de Boi: Costumes, Fé e Celebração</h2>

            <p>Desde sua origem, a Comunidade Quilombola de Boi preserva tradições culturais e familiares por meio de práticas que atravessam gerações, como a agricultura, a religiosidade, a música e a realização de festejos locais. Essas expressões integram o cotidiano dos moradores e constituem importantes instrumentos de fortalecimento da identidade coletiva e da memória comunitária, mantendo vivos os saberes e valores herdados dos antepassados.</p>

            <p>Nesse processo de afirmação cultural, o termo “negos do Boi”, inicialmente utilizado de forma pejorativa, foi ressignificado pelos próprios moradores, transformando-se em símbolo de resistência, orgulho e pertencimento. Essa ressignificação reafirma a história da comunidade e sua trajetória de luta, fortalecendo o sentimento de união e valorização da identidade quilombola construída ao longo do tempo.</p>

            <p>Entre as principais manifestações culturais da comunidade destaca-se o Festival Quilombola, evento que desempenha papel fundamental na valorização da história e da cultura local. A celebração reúne moradores de diferentes gerações e promove o compartilhamento de saberes, práticas e valores que sustentam a vida coletiva. Durante o festival, a comunidade reafirma sua diversidade cultural, fortalece os vínculos sociais e mantém vivas as tradições que consolidam a identidade quilombola do território.</p>

        </div>

        <div class="costumes-hero-galeria">
            <div class="costumes-foto"><img src="{{ asset('images/Boi/festejos/f1.jpg') }}" alt="Quilombo de Boi 1"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Boi/festejos/f2.jpg') }}" alt="Quilombo de Boi 2"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Boi/festejos/f3.jpeg') }}" alt="Quilombo de Boi 3"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Boi/festejos/f4.jpg') }}" alt="Quilombo de Boi 4"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Boi/festejos/f5.jpeg') }}" alt="Quilombo de Boi 5"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Boi/festejos/f6.jpeg') }}" alt="Quilombo de Boi 6"></div>
        </div>
    </div>
</section>
@endsection
