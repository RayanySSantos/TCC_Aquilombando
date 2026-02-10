@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Vargem Alta/Agricultura/h1.jpeg') }}');">
    <div class="secao-capa-conteudo">
        <h1>Vargem Alta: Agricultura Familiar e Saberes</h1>
        <span>Agricultura Familiar</span>
    </div>
</section>

<section class="agricultura-hero">
    <div class="agricultura-hero-container">
        <div class="agricultura-hero-texto">
            <h2 class="secao-titulo">Vargem Alta: Agricultura Familiar e Saberes</h2>

            <p>A agricultura familiar constitui a base da subsistência e do modo de vida da Comunidade Quilombola de Vargem Alta. Os moradores cultivam feijão, mandioca, umbu-cajá, manga, goiaba, acerola, tamarindo, laranja e diversas hortaliças, garantindo alimentos frescos para o consumo das famílias. Esses cultivos são realizados a partir de práticas tradicionais e sustentáveis, que respeitam os ciclos da natureza e fortalecem a relação histórica da comunidade com o território.</p>

            <p>O trabalho agrícola é desenvolvido de forma coletiva, envolvendo diferentes gerações da comunidade. Pais, filhos e netos compartilham o cotidiano da roça, o que possibilita a transmissão de conhecimentos, técnicas e valores associados ao cuidado com a terra. Essa convivência favorece a educação ambiental, reforça a solidariedade comunitária e contribui para a valorização da herança cultural quilombola.</p>

            <p>Além de assegurar o sustento das famílias, a produção agrícola também possibilita a geração de renda por meio da comercialização dos excedentes em feiras e mercados locais. Essa prática fortalece a autonomia econômica dos moradores, estimula a economia solidária e valoriza o trabalho coletivo. Para a comunidade, a agricultura vai além da produção de alimentos, representando um elo com a ancestralidade, a memória coletiva e a resistência cultural que sustentam a identidade quilombola.</p>

        </div>

        <div class="agricultura-hero-galeria">
            <div class="agricultura-foto"><img src="{{ asset('images/Vargem Alta/Agricultura/h1.jpeg') }}" alt="Vargem Alta 1"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Vargem Alta/Agricultura/h2.jpeg') }}" alt="Vargem Alta 2"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Vargem Alta/Agricultura/h3.jpeg') }}" alt="Vargem Alta 3"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Vargem Alta/Agricultura/h4.jpeg') }}" alt="Vargem Alta 4"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Vargem Alta/Agricultura/h1.jpeg') }}" alt="Vargem Alta 5"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Vargem Alta/Agricultura/h2.jpeg') }}" alt="Vargem Alta 6"></div>
        </div>
    </div>
</section>
@endsection
