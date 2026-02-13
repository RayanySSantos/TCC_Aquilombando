@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.75), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Passagem/artesanato/artesanato03.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Passagem de Areia: Arte Manual e Identidade Quilombola</h1>
        <span>Artesanato</span>
    </div>
</section>

<section class="artesanato-hero">
    <div class="artesanato-hero-container">
        <div class="artesanato-hero-texto">

            <p>O artesanato da Comunidade Quilombola de Passagem de Areia constitui uma importante expressão cultural, social e econômica, profundamente ligada à identidade e à história do território. Produzido majoritariamente pelas mulheres da comunidade, o trabalho artesanal inclui cestos de palma, bonecas de pano, panos bordados, peças em crochê e outros trabalhos manuais que revelam criatividade, dedicação e domínio de técnicas tradicionais. Cada peça carrega significados que ultrapassam a estética, funcionando como símbolo de pertencimento, resistência e preservação dos saberes ancestrais quilombolas.</p>

            <p>As técnicas artesanais são transmitidas de geração em geração por meio do convívio familiar e comunitário. Mulheres mais velhas compartilham seus conhecimentos com crianças e jovens, fortalecendo vínculos afetivos e garantindo a continuidade das práticas tradicionais. Esse aprendizado cotidiano contribui para a valorização da cultura local e para a manutenção da memória coletiva, reafirmando o artesanato como parte essencial da vida comunitária.</p>

            <p>Além de seu valor cultural, o artesanato desempenha papel significativo na economia local, pois as peças produzidas são comercializadas em feiras, eventos e espaços comunitários, gerando renda complementar e promovendo maior autonomia para as famílias. Mais do que objetos utilitários ou decorativos, os trabalhos manuais representam orgulho, identidade e resistência cultural, mantendo viva a história de Passagem de Areia e reforçando a importância de preservar essas práticas para as futuras gerações.</p>

        </div>

        <div class="artesanato-hero-galeria">
            <div class="artesanato-foto"><img src="{{ asset('images/Passagem/artesanato/a1.jpeg') }}" alt="Passagem de Areia 1"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Passagem/artesanato/a2.jpeg') }}" alt="Passagem de Areia 2"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Passagem/artesanato/a3.jpeg') }}" alt="Passagem de Areia 3"></div>
        </div>
    </div>
</section>
@endsection
