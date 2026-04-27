@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.70), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Boi/artesanato/artesanato05.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Quilombo Boi: Artesanato e Sustentabilidade</h1>
        <span>Artesanato</span>
    </div>
</section>

<section class="artesanato-hero">
    <div class="artesanato-hero-container artesanato-hero-container--top">
        <div class="artesanato-hero-texto">

            <p>O artesanato da Comunidade Quilombola Boi representa uma importante manifestação da criatividade, dos saberes ancestrais e da relação direta com o território. As peças produzidas incluem cestos e flores de bananeira, bonecas de pano e pinturas, confeccionadas a partir de recursos naturais disponíveis na região. Cada objeto possui significados culturais próprios e evidencia a habilidade manual dos moradores, atuando como elemento de afirmação da identidade quilombola e de preservação da memória coletiva.</p>

            <p>O artesanato ocupa um espaço central no cotidiano da comunidade, integrando arte, cultura e modos de vida tradicionais. A produção artesanal é transmitida entre gerações, principalmente pelas mulheres, que desempenham papel essencial na preservação desses conhecimentos. São elas que ensinam aos mais jovens as técnicas e os processos de produção, fortalecendo os vínculos familiares e comunitários e garantindo a continuidade das práticas ancestrais.</p>

            <p>Além de sua dimensão cultural e simbólica, o artesanato também possui relevância econômica, uma vez que muitas peças são comercializadas em feiras e eventos locais, contribuindo para a geração de renda e a sustentabilidade da comunidade. Mais do que objetos, os trabalhos artesanais representam resistência cultural, orgulho e pertencimento, reafirmando a valorização da história e das tradições que sustentam a identidade da Comunidade Quilombola Boi.</p>
        
        </div>

        <div class="artesanato-midia">
            <div class="artesanato-hero-galeria">
                <div class="artesanato-foto"><img src="{{ asset('images/Boi/artesanato/a1.jpeg') }}" alt="Quilombo Boi 1"></div>
                <div class="artesanato-foto"><img src="{{ asset('images/Boi/artesanato/a2.jpeg') }}" alt="Quilombo Boi 2"></div>
                <div class="artesanato-foto"><img src="{{ asset('images/Boi/artesanato/a3.jpeg') }}" alt="Quilombo Boi 3"></div>
                <div class="artesanato-foto"><img src="{{ asset('images/Boi/artesanato/a4.jpeg') }}" alt="Quilombo Boi 4"></div>
                <div class="artesanato-foto"><img src="{{ asset('images/Boi/artesanato/a5.jpeg') }}" alt="Quilombo Boi 5"></div>
                <div class="artesanato-foto"><img src="{{ asset('images/Boi/artesanato/a6.jpeg') }}" alt="Quilombo Boi 6"></div>
            </div>
            <p class="artesanato-galeria-fonte">Fonte: Quilombo Boi; Projeto Mapeamento Gastronômico (2025).</p>
        </div>
    </div>
</section>
@endsection
