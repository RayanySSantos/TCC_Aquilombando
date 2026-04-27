@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Lagoa dos Anjos/festejos/3.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Lagoa dos Anjos: Costumes e Tradições Comunitárias</h1>
        <span>Costumes e Tradições</span>
    </div>
</section>

<section class="costumes-hero">
    <div class="costumes-hero-container costumes-hero-container--top">
        <div class="costumes-hero-texto">

            <p>As comunidades quilombolas constroem sua identidade a partir de saberes, práticas e memórias compartilhadas coletivamente, transmitidas, principalmente, por meio da oralidade. Esses conhecimentos permanecem presentes nas narrativas dos mais velhos e nas vivências do cotidiano comunitário. No Quilombo Lagoa dos Anjos, cantos, festas e relatos revelam a forte presença da ancestralidade, que orienta o modo de vida e fortalece a ligação entre passado e presente, reunindo resistência, espiritualidade e alegria como elementos centrais da experiência quilombola.</p>

            <p>A comunidade de Lagoa dos Anjos preserva diversas tradições que expressam sua memória e identidade cultural. As celebrações religiosas, como as festas em homenagem à padroeira Nossa Senhora Aparecida, ao padroeiro Santo Antônio, o São João e o Reisado, ocupam posição de destaque na vida comunitária. Somam-se a essas práticas os contos, as lendas e os ensinamentos transmitidos oralmente, que reforçam os vínculos sociais e asseguram a continuidade dos saberes ancestrais, fortalecendo o sentimento de pertencimento coletivo.</p>

            <p>O Reisado é uma das manifestações culturais mais relevantes da Comunidade Quilombola de Lagoa dos Anjos. A celebração reúne moradores de diferentes idades em cortejos marcados por cantos, danças e instrumentos que animam a festividade. Essa prática vai além da devoção religiosa, tornando-se um símbolo de união, memória e continuidade cultural. Transmitido entre gerações, o Reisado reafirma a identidade quilombola, fortalece os laços comunitários e mantém viva a conexão com as raízes culturais e espirituais da comunidade.</p>
        </div>

        <div class="costumes-midia">
            <div class="costumes-hero-galeria costumes-hero-galeria--vertical">
                <div class="costumes-foto"><img src="{{ asset('images/Lagoa dos Anjos/festejos/f1.jpeg') }}" alt="Lagoa dos Anjos 1"></div>
                <div class="costumes-foto"><img src="{{ asset('images/Lagoa dos Anjos/festejos/f2.jpeg') }}" alt="Lagoa dos Anjos 2"></div>
                <div class="costumes-foto"><img src="{{ asset('images/Lagoa dos Anjos/festejos/f3.jpeg') }}" alt="Lagoa dos Anjos 3"></div>
            </div>
                <p class="costumes-galeria-fonte">Fonte: Quilombo Lagoa dos Anjos; Projetos Mapeamento Gastronômico; Culinária Ancestral; e Comunidades Rurais e Tradicionais (2025).</p>
        </div>
    </div>
</section>
@endsection
