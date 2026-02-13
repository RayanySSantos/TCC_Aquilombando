@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Aroeira/festejos/7.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Aroeira: Costumes e Tradições em Festa</h1>
        <span>Costumes e Tradições</span>
    </div>
</section>

<section class="costumes-hero">
    <div class="costumes-hero-container">
        <div class="costumes-hero-texto">

            <p>Os costumes e tradições da Comunidade Quilombola de Aroeira são construídos a partir de práticas, saberes e vivências compartilhadas ao longo do tempo, preservadas principalmente pela oralidade e pela convivência entre gerações. Esses conhecimentos são transmitidos pelas pessoas mais velhas e reafirmados em momentos coletivos de celebração, nos quais passado e presente dialogam constantemente. Festas, cantos e narrativas revelam um modo de vida marcado pela resistência, pela espiritualidade e pela alegria, sustentando a identidade quilombola da comunidade.</p>

            <p>Entre as expressões culturais mais significativas, o reisado ocupa lugar central ao articular fé, música e dança como formas de manter viva a memória coletiva. Em Aroeira, essa tradição se manifesta por meio de cantos, versos e ritmos que narram histórias, lendas e acontecimentos marcantes da comunidade. Mais do que um momento festivo, o reisado constitui um espaço de afirmação cultural e ancestral, conectando gerações e transmitindo valores, saberes e sentimentos de pertencimento.</p>

            <p>Outras manifestações culturais, como o samba de roda, as celebrações juninas, o Natal e a festa em homenagem a Santa Luzia, também desempenham papel fundamental na preservação da memória local. Nessas celebrações, os instrumentos musicais assumem importância simbólica, como a sanfona, o bumba dos reis e o tamborim artesanal, que conduzem os ritmos e fortalecem a energia coletiva. Mais do que instrumentos sonoros, eles representam continuidade cultural, elo entre gerações e elementos essenciais para o fortalecimento da identidade e dos costumes da Comunidade Quilombola de Aroeira.</p>

        </div>

        <div class="costumes-hero-galeria">
            <div class="costumes-foto"><img src="{{ asset('images/Aroeira/festejos/f1.png') }}" alt="Aroeira 1"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Aroeira/festejos/f2.png') }}" alt="Aroeira 2"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Aroeira/festejos/f3.png') }}" alt="Aroeira 3"></div>
        </div>
    </div>
</section>
@endsection
