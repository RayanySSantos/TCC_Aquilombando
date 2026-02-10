@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Boi/artesanato/a1.jpeg') }}');">
    <div class="secao-capa-conteudo">
        <h1>Quilombo de Boi: Artesanato e Sustentabilidade</h1>
        <span>Artesanato</span>
    </div>
</section>

<section class="artesanato-hero">
    <div class="artesanato-hero-container">
        <div class="artesanato-hero-texto">
            <h2 class="secao-titulo">Quilombo de Boi: Artesanato e Sustentabilidade</h2>

            <p>O artesanato da Comunidade Quilombola de Boi constitui uma importante expressão da criatividade, do conhecimento ancestral e da relação direta com o território. As peças produzidas incluem cestos e flores de bananeira, bonecas de pano e pinturas, elaboradas a partir de recursos naturais disponíveis na região. Cada objeto carrega significados culturais próprios e expressa a habilidade manual dos moradores, funcionando como elemento de afirmação da identidade quilombola e de preservação da memória coletiva.</p>

            <p>O artesanato ocupa lugar central no cotidiano da comunidade, integrando arte, cultura e modos de vida tradicionais. A produção artesanal é transmitida entre as gerações, especialmente pelas mulheres, que desempenham papel fundamental na preservação desses saberes. São elas que ensinam aos mais jovens as técnicas e os modos de produção, fortalecendo os laços familiares e comunitários e assegurando a continuidade das práticas ancestrais.</p>

            <p>Além de sua dimensão cultural e simbólica, o artesanato também exerce função econômica relevante, pois muitas peças são comercializadas em feiras e eventos locais, contribuindo para a geração de renda e a sustentabilidade da comunidade. Mais do que objetos, os trabalhos artesanais representam resistência cultural, orgulho e pertencimento, reafirmando a valorização da história e das tradições que sustentam a identidade da Comunidade Quilombola de Boi.</p>

        </div>

        <div class="artesanato-hero-galeria">
            <div class="artesanato-foto"><img src="{{ asset('images/Boi/artesanato/a1.jpeg') }}" alt="Quilombo de Boi 1"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Boi/artesanato/a2.jpeg') }}" alt="Quilombo de Boi 2"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Boi/artesanato/a3.jpeg') }}" alt="Quilombo de Boi 3"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Boi/artesanato/a4.jpeg') }}" alt="Quilombo de Boi 4"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Boi/artesanato/a5.jpeg') }}" alt="Quilombo de Boi 5"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Boi/artesanato/a6.jpeg') }}" alt="Quilombo de Boi 6"></div>
        </div>
    </div>
</section>
@endsection
