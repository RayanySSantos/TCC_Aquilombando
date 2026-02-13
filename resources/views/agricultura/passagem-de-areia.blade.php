@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Passagem/Agricultura/areia.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Passagem de Areia: Lavoura e Comunidade</h1>
        <span>Agricultura Familiar</span>
    </div>
</section>

<section class="agricultura-hero">
    <div class="agricultura-hero-container">
        <div class="agricultura-hero-texto">

            <p>A agricultura familiar constitui a base do modo de vida da Comunidade Quilombola de Passagem de Areia, sendo fundamental para a subsistência e a organização social do território. Os moradores cultivam palma, mandioca, manga, caju, batata-doce, jabuticaba, hortaliças e diversas outras frutas, garantindo alimentos frescos e saudáveis para o consumo das famílias. Essa produção fortalece a autonomia alimentar da comunidade e reafirma a relação histórica e afetiva com a terra, compreendida como herança dos antepassados e fonte de vida.</p>

            <p>O cultivo é realizado de forma coletiva, envolvendo pessoas de diferentes gerações em um processo contínuo de aprendizado e partilha. Pais, filhos e netos trabalham juntos nas roças, transmitindo saberes tradicionais relacionados ao plantio, ao cuidado com o solo e ao respeito aos ciclos da natureza. Essa convivência cotidiana fortalece os vínculos familiares e comunitários e assegura a preservação de práticas agrícolas sustentáveis que atravessam gerações.</p>

            <p>Além de garantir o sustento das famílias, a agricultura familiar também possibilita a geração de renda por meio da comercialização de produtos e derivados, como doces, geleias e outros alimentos artesanais. Essa prática contribui para a autonomia econômica da comunidade e valoriza o trabalho coletivo, reforçando a agricultura como elemento central da identidade quilombola, da memória social e da resistência cultural de Passagem de Areia.</p>

        </div>

        <div class="agricultura-hero-galeria">
            <div class="agricultura-foto"><img src="{{ asset('images/Passagem/Agricultura/h1.jpeg') }}" alt="Passagem de Areia 1"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Passagem/Agricultura/h2.jpeg') }}" alt="Passagem de Areia 2"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Passagem/Agricultura/h3.jpeg') }}" alt="Passagem de Areia 3"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Passagem/Agricultura/h4.jpeg') }}" alt="Passagem de Areia 4"></div>
        </div>
    </div>
</section>
@endsection
