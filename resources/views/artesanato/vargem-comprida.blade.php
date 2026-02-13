@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.80), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Vargem Comprida/Artesanato/artesanato01.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Vargem Comprida: Tear de Roda e Heranças do Algodão</h1>
        <span>Artesanato</span>
    </div>
</section>

<section class="artesanato-hero">
    <div class="artesanato-hero-container">
        <div class="artesanato-hero-texto">

            <p>O artesanato da Comunidade Quilombola de Vargem Comprida é uma expressão viva da tradição, da criatividade e da identidade quilombola. As mulheres da comunidade produzem, com dedicação e habilidade, peças em algodão no tear de roda, como toalhas e cachecóis, além de dominarem técnicas como fiar algodão, tecelagem, crochê, ponto cruz, marambaia, vagonite e costura. Cada criação carrega saberes transmitidos entre gerações e representa um elo entre passado e presente, preservando conhecimentos ancestrais e mantendo viva a cultura local.</p>

            <p>As mulheres desempenham papel central na preservação dessas práticas, ensinando aos mais jovens os métodos tradicionais e garantindo a continuidade do conhecimento ancestral. A produção artesanal fortalece os laços comunitários e integra o cotidiano da comunidade, além de contribuir para a economia local, já que muitas peças são comercializadas em feiras e eventos. Dessa forma, o artesanato promove autonomia financeira, empoderamento feminino e valorização do trabalho manual dentro do contexto quilombola.</p>

            <p>O algodão ocupa lugar especial na tradição artesanal de Vargem Comprida, simbolizando um dos elos mais antigos com os saberes herdados dos antepassados. Nesse contexto, destaca-se a trajetória de Dona Silvalina Maria de Oliveira, que desde os 14 anos de idade aprendeu com a avó e as tias as técnicas de fiar, marcar e tecer, tornando-se guardiã desse conhecimento ancestral. Esses saberes foram transmitidos a seus familiares José Humberto de Oliveira e Raimunda Lopes de Oliveira Brito, que hoje mantêm viva a prática do tear de roda, assegurando a continuidade dessa tradição artesanal na comunidade.</p>

        </div>

        <div class="artesanato-hero-galeria">
            <div class="artesanato-foto"><img src="{{ asset('images/Vargem Comprida/Artesanato/a1.jpeg') }}" alt="Vargem Comprida 1"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Vargem Comprida/Artesanato/a2.jpeg') }}" alt="Vargem Comprida 2"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Vargem Comprida/Artesanato/a3.jpeg') }}" alt="Vargem Comprida 3"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Vargem Comprida/Artesanato/a11.jpeg') }}" alt="Vargem Comprida 4"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Vargem Comprida/Artesanato/a5.jpeg') }}" alt="Vargem Comprida 5"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Vargem Comprida/Artesanato/a6.jpeg') }}" alt="Vargem Comprida 6"></div>
        </div>
    </div>
</section>
@endsection
