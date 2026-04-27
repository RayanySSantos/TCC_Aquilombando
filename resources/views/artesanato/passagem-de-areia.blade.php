@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.75), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Passagem/artesanato/artesanato03.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Passagem de Areia: Arte Manual e Identidade Quilombola</h1>
        <span>Artesanato</span>
    </div>
</section>

<section class="artesanato-hero">
    <div class="artesanato-hero-container artesanato-hero-container--top">
        <div class="artesanato-hero-texto">

            <p>O artesanato da Comunidade Quilombola de Passagem de Areia representa uma importante manifestação cultural, social e econômica, profundamente vinculada à identidade e à história do território. Desenvolvido principalmente pelas mulheres da comunidade, o trabalho artesanal abrange a produção de cestos de palma, bonecas de pano, panos bordados, peças em crochê e outros trabalhos manuais que demonstram criatividade, dedicação e domínio de técnicas tradicionais. Cada peça produzida carrega significados que vão além da estética, funcionando como símbolo de pertencimento, resistência e preservação dos saberes ancestrais quilombolas.</p>

            <p>As técnicas artesanais são repassadas de geração em geração por meio da convivência familiar e comunitária. As mulheres mais experientes compartilham seus conhecimentos com crianças e jovens, fortalecendo os vínculos afetivos e assegurando a continuidade das práticas tradicionais. Esse processo de aprendizado cotidiano contribui para a valorização da cultura local e para a preservação da memória coletiva, reafirmando o artesanato como elemento essencial da vida comunitária.</p>

            <p>Além de sua relevância cultural, o artesanato também exerce um papel importante na economia local, uma vez que as peças produzidas são comercializadas em feiras, eventos e espaços comunitários, gerando renda complementar e promovendo maior autonomia para as famílias. Mais do que objetos utilitários ou decorativos, os trabalhos manuais expressam orgulho, identidade e resistência cultural, mantendo viva a história de Passagem de Areia e reforçando a importância de preservar essas práticas para as futuras gerações.</p>

        </div>

        <div class="artesanato-midia">
            <div class="artesanato-hero-galeria artesanato-hero-galeria--vertical">
                <div class="artesanato-foto"><img src="{{ asset('images/Passagem/artesanato/a1.jpeg') }}" alt="Passagem de Areia 1"></div>
                <div class="artesanato-foto"><img src="{{ asset('images/Passagem/artesanato/a3.jpeg') }}" alt="Passagem de Areia 3"></div>
                <div class="artesanato-foto"><img src="{{ asset('images/Passagem/artesanato/a2.jpeg') }}" alt="Passagem de Areia 2"></div>
            </div>
            <p class="artesanato-galeria-fonte">Fonte: Quilombo Passagem de Areia; Projeto Mapeamento Gastronômico (2025).</p>
        </div>
    </div>
</section>
@endsection
