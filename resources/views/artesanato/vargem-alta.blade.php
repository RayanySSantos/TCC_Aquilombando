@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.80), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Vargem Alta/artesanato/artesanato02.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Vargem Alta: Tradição Artesanal e Saberes Femininos</h1>
        <span>Artesanato</span>
    </div>
</section>

<section class="artesanato-hero">
    <div class="artesanato-hero-container artesanato-hero-container--top">
        <div class="artesanato-hero-texto">

            <p>O artesanato da Comunidade Quilombola de Vargem Alta representa uma manifestação concreta da tradição, da criatividade e da identidade cultural do território. Entre as práticas mais valorizadas destacam-se a confecção de peças em crochê, o processo de fiar o algodão, a tecelagem no tear de roda, o ponto cruz, a marambaia, o vagonite, a costura e outros trabalhos manuais desenvolvidos com materiais disponíveis na própria comunidade. Cada peça produzida carrega consigo a memória coletiva e os saberes transmitidos ao longo das gerações.</p>

            <p>As mulheres exercem um papel fundamental na preservação dessas técnicas artesanais, sendo responsáveis por repassar aos mais jovens os modos tradicionais de produção e assegurar a continuidade da cultura local. Esse aprendizado ocorre no contexto familiar e comunitário, fortalecendo os vínculos sociais e valorizando o trabalho manual como parte essencial da identidade quilombola. Por meio do artesanato, os conhecimentos ancestrais permanecem presentes no cotidiano da comunidade.</p>

            <p>Além de sua importância cultural, o artesanato também contribui para a economia local, uma vez que muitas peças são comercializadas em feiras e eventos regionais, gerando renda e promovendo autonomia financeira para as famílias. Essa atividade favorece o empoderamento feminino, valoriza o território e reafirma o artesanato como uma forma de resistência cultural e pertencimento. Mais do que simples objetos, cada criação preserva a história da comunidade e reforça a necessidade de manter vivas as tradições para as futuras gerações.</p>

        </div>

        <div class="artesanato-midia">
            <div class="artesanato-hero-galeria artesanato-hero-galeria--vargem-alta">
                <div class="artesanato-foto"><img src="{{ asset('images/Vargem Alta/artesanato/a1.jpeg') }}" alt="Vargem Alta 1"></div>
                <div class="artesanato-foto"><img src="{{ asset('images/Vargem Alta/artesanato/a2.jpeg') }}" alt="Vargem Alta 2"></div>
                <div class="artesanato-foto"><img src="{{ asset('images/Vargem Alta/artesanato/a3.jpeg') }}" alt="Vargem Alta 3"></div>
                <div class="artesanato-foto"><img src="{{ asset('images/Vargem Alta/artesanato/a4.jpeg') }}" alt="Vargem Alta 4"></div>
                <div class="artesanato-foto"><img src="{{ asset('images/Vargem Alta/artesanato/a5.jpeg') }}" alt="Vargem Alta 5"></div>
            </div>
            <p class="artesanato-galeria-fonte">Fonte: Quilombo Vargem Alta; Projeto Mapeamento Gastronômico (2025).</p>
        </div>
    </div>
</section>
@endsection
