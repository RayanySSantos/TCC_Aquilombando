@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Aroeira/festejos/7.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Aroeira: Costumes e Tradições em Festa</h1>
        <span>Costumes e Tradições</span>
    </div>
</section>

<section class="costumes-hero">
    <div class="costumes-hero-container costumes-hero-container--top">
        <div class="costumes-hero-texto">

            <p>Os costumes e tradições da Comunidade Quilombola de Aroeira são construídos a partir de práticas, saberes e experiências compartilhadas ao longo do tempo, preservadas principalmente por meio da oralidade e da convivência entre gerações. Esses conhecimentos são transmitidos pelas pessoas mais velhas e reafirmados em momentos coletivos de celebração, nos quais passado e presente se encontram constantemente. Festas, cantos e narrativas revelam um modo de vida marcado pela resistência, pela espiritualidade e pela alegria, sustentando a identidade quilombola da comunidade.</p>

            <p>Entre as manifestações culturais mais relevantes, o reisado ocupa posição de destaque ao integrar fé, música e dança como formas de manter viva a memória coletiva. Em Aroeira, essa tradição se expressa por meio de cantos, versos e ritmos que contam histórias, lendas e acontecimentos marcantes da comunidade. Mais do que uma celebração, o reisado constitui um espaço de afirmação cultural e ancestral, conectando gerações e transmitindo valores, saberes e sentimentos de pertencimento.</p>

            <p>Outras manifestações culturais, como o samba de roda, as festas juninas, o Natal e a celebração em homenagem a Santa Luzia, também desempenham papel essencial na preservação da memória local. Nessas ocasiões, os instrumentos musicais assumem grande importância simbólica, como a sanfona, o bumba dos reis e o tamborim artesanal, que conduzem os ritmos e fortalecem a energia coletiva. Mais do que instrumentos sonoros, eles representam continuidade cultural, elo entre gerações e elementos fundamentais para o fortalecimento da identidade e dos costumes da Comunidade Quilombola de Aroeira.</p>
        </div>

        <div class="costumes-midia">
            <div class="costumes-hero-galeria costumes-hero-galeria--vertical">
                <div class="costumes-foto"><img src="{{ asset('images/Aroeira/festejos/f1.png') }}" alt="Aroeira 1"></div>
                <div class="costumes-foto"><img src="{{ asset('images/Aroeira/festejos/f2.png') }}" alt="Aroeira 2"></div>
                <div class="costumes-foto"><img src="{{ asset('images/Aroeira/festejos/f3.png') }}" alt="Aroeira 3"></div>
            </div>
                <p class="costumes-galeria-fonte">Fonte: Quilombo Aroeira; Projetos Mapeamento Gastronômico; Culinária Ancestral; e Comunidades Rurais e Tradicionais (2025).</p>
        </div>
    </div>
</section>
@endsection
