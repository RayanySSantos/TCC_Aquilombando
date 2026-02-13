@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Lagoa dos Anjos/festejos/3.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Lagoa dos Anjos: Costumes e Tradições Comunitárias</h1>
        <span>Costumes e Tradições</span>
    </div>
</section>

<section class="costumes-hero">
    <div class="costumes-hero-container">
        <div class="costumes-hero-texto">

            <p>As comunidades quilombolas constroem sua identidade a partir de saberes, práticas e memórias compartilhadas coletivamente, transmitidas principalmente pela oralidade. Esses conhecimentos permanecem vivos nas narrativas dos mais velhos e nas vivências cotidianas da comunidade. No Quilombo Lagoa dos Anjos, cantos, festas e relatos evidenciam a forte presença da ancestralidade, que orienta o modo de viver e fortalece o vínculo entre passado e presente, entrelaçando resistência, espiritualidade e alegria como elementos centrais da experiência quilombola.</p>

            <p>A comunidade de Lagoa dos Anjos mantém vivas diversas tradições que expressam sua memória e identidade cultural. As celebrações religiosas, como as festas em homenagem à padroeira Nossa Senhora Aparecida, ao padroeiro Santo Antônio, o São João e o Reisado, ocupam lugar de destaque na vida comunitária. Somam-se a essas práticas os contos, as lendas e os ensinamentos transmitidos oralmente, que reforçam os laços sociais e garantem a continuidade dos saberes ancestrais, fortalecendo o sentimento de pertencimento coletivo.</p>

            <p>O Reisado é uma das expressões culturais mais significativas da Comunidade Quilombola de Lagoa dos Anjos. A celebração reúne moradores de diferentes idades em cortejos marcados por cantos, danças e instrumentos que animam a festividade. Essa manifestação vai além da devoção religiosa, tornando-se símbolo de união, memória e continuidade cultural. Transmitido de geração em geração, o Reisado reafirma a identidade quilombola, fortalece os vínculos comunitários e mantém viva a ligação com as raízes culturais e espirituais da comunidade.</p>

        </div>

        <div class="costumes-hero-galeria">
            <div class="costumes-foto"><img src="{{ asset('images/Lagoa dos Anjos/festejos/f1.jpeg') }}" alt="Lagoa dos Anjos 1"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Lagoa dos Anjos/festejos/f2.jpeg') }}" alt="Lagoa dos Anjos 2"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Lagoa dos Anjos/festejos/f3.jpeg') }}" alt="Lagoa dos Anjos 3"></div>
        </div>
    </div>
</section>
@endsection
