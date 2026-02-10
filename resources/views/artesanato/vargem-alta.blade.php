@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Vargem Alta/artesanato/a1.jpeg') }}');">
    <div class="secao-capa-conteudo">
        <h1>Vargem Alta: Tradição Artesanal e Saberes Femininos</h1>
        <span>Artesanato</span>
    </div>
</section>

<section class="artesanato-hero">
    <div class="artesanato-hero-container">
        <div class="artesanato-hero-texto">
            <h2 class="secao-titulo">Vargem Alta: Tradição Artesanal e Saberes Femininos</h2>

             <p>O artesanato da Comunidade Quilombola de Vargem Alta é uma expressão concreta da tradição, da criatividade e da identidade cultural local. Entre as práticas mais valorizadas estão a produção de peças em crochê, o fiar do algodão, a tecelagem no tear de roda, o ponto cruz, a marambaia, o vagonite, a costura e outros trabalhos manuais realizados com materiais disponíveis no território. Cada peça produzida carrega a memória coletiva e os saberes transmitidos ao longo das gerações.</p>

            <p>As mulheres desempenham papel central na preservação dessas técnicas artesanais, sendo responsáveis por ensinar aos mais jovens os modos tradicionais de produção e garantir a continuidade da cultura local. O aprendizado ocorre no convívio familiar e comunitário, fortalecendo os laços sociais e valorizando o trabalho manual como parte essencial da identidade quilombola. Por meio do artesanato, os saberes ancestrais permanecem vivos no cotidiano da comunidade.</p>

            <p>Além de seu valor cultural, o artesanato também contribui para a economia local, pois muitas peças são comercializadas em feiras e eventos regionais, promovendo renda e autonomia financeira para as famílias. Essa atividade incentiva o empoderamento feminino, valoriza o território e reafirma o artesanato como forma de resistência cultural e pertencimento. Mais do que objetos, cada criação mantém viva a história da comunidade e reforça a importância de preservar as tradições para as futuras gerações.</p>
           
        </div>

        <div class="artesanato-hero-galeria">
            <div class="artesanato-foto"><img src="{{ asset('images/Vargem Alta/artesanato/a1.jpeg') }}" alt="Vargem Alta 1"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Vargem Alta/artesanato/a2.jpeg') }}" alt="Vargem Alta 2"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Vargem Alta/artesanato/a3.jpeg') }}" alt="Vargem Alta 3"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Vargem Alta/artesanato/a4.jpeg') }}" alt="Vargem Alta 4"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Vargem Alta/artesanato/a5.jpeg') }}" alt="Vargem Alta 5"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Vargem Alta/artesanato/a1.jpeg') }}" alt="Vargem Alta 6"></div>
        </div>
    </div>
</section>
@endsection
