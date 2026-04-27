@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Boi/festejos/2.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Quilombo Boi: Costumes, Fé e Celebração</h1>
        <span>Costumes e Tradições</span>
    </div>
</section>

<section class="costumes-hero">
    <div class="costumes-hero-container costumes-hero-container--top">
        <div class="costumes-hero-texto">

            <p>Desde sua formação, a Comunidade Quilombola Boi mantém vivas tradições culturais e familiares por meio de práticas que atravessam gerações, como a agricultura, a religiosidade, a música e a realização de festejos locais. Essas expressões fazem parte do cotidiano dos moradores e constituem importantes meios de fortalecimento da identidade coletiva e da memória comunitária, preservando os saberes e valores herdados dos antepassados.</p>

            <p>Nesse processo de afirmação cultural, a expressão “negos do Boi”, inicialmente utilizada de maneira pejorativa, foi ressignificada pelos próprios moradores, passando a representar um símbolo de resistência, orgulho e pertencimento. Essa nova interpretação reafirma a história da comunidade e sua trajetória de luta, fortalecendo o sentimento de união e a valorização da identidade quilombola construída ao longo do tempo.</p>

            <p>Entre as principais manifestações culturais da comunidade, destaca-se o Festival Quilombola, evento que exerce papel fundamental na valorização da história e da cultura local. A celebração reúne moradores de diferentes gerações e promove o compartilhamento de saberes, práticas e valores que sustentam a vida coletiva. Durante o festival, a comunidade reafirma sua diversidade cultural, fortalece os vínculos sociais e mantém vivas as tradições que consolidam a identidade quilombola do território.</p>
        </div>

        <div class="costumes-midia">
            <div class="costumes-hero-galeria">
                <div class="costumes-foto"><img src="{{ asset('images/Boi/festejos/f1.jpg') }}" alt="Quilombo Boi 1"></div>
                <div class="costumes-foto"><img src="{{ asset('images/Boi/festejos/f2.jpg') }}" alt="Quilombo Boi 2"></div>
                <div class="costumes-foto"><img src="{{ asset('images/Boi/festejos/f3.jpeg') }}" alt="Quilombo Boi 3"></div>
                <div class="costumes-foto"><img src="{{ asset('images/Boi/festejos/f4.jpg') }}" alt="Quilombo Boi 4"></div>
                <div class="costumes-foto"><img src="{{ asset('images/Boi/festejos/f5.jpeg') }}" alt="Quilombo Boi 5"></div>
                <div class="costumes-foto"><img src="{{ asset('images/Boi/festejos/f6.jpeg') }}" alt="Quilombo Boi 6"></div>
            </div>
            <p class="costumes-galeria-fonte">Fonte: Quilombo Boi; Projeto Mapeamento Gastronômico (2025).</p>
        </div>
    </div>
</section>
@endsection
