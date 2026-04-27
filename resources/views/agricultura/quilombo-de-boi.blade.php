@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Boi/Agricultura/boi.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Quilombo Boi: Agricultura e Sustento</h1>
        <span>Agricultura Familiar</span>
    </div>
</section>

<section class="agricultura-hero">
    <div class="agricultura-hero-container">
        <div class="agricultura-hero-texto">

            <p>A agricultura familiar constitui a base do cotidiano na Comunidade Quilombola Boi, exercendo papel essencial na subsistência e na organização social do território. Os moradores cultivam milho, feijão, mandioca, maxixe, coco, frutas e hortaliças em pequenos roçados próximos às residências, garantindo alimentos frescos e saudáveis, além de fortalecer a autonomia alimentar das famílias. Essas práticas agrícolas seguem métodos tradicionais, transmitidos entre gerações, que respeitam os ciclos naturais da terra, o regime das chuvas e a preservação do solo, reafirmando os saberes ancestrais e a relação de cuidado com a natureza.</p>

            <p>O cultivo é realizado de forma coletiva, envolvendo pais, filhos e netos em um processo contínuo de aprendizado e troca de conhecimentos. Os mais velhos transmitem saberes sobre plantio, colheita e manejo da terra, ensinando, na prática, a importância do respeito ao meio ambiente e da conservação dos recursos naturais. Essa convivência diária nos roçados fortalece os vínculos familiares e comunitários, ao mesmo tempo em que garante a continuidade das tradições culturais que estruturam o modo de vida quilombola.</p>

            <p>Além de assegurar o sustento das famílias, a produção agrícola permite a comercialização dos excedentes em feiras e mercados locais, contribuindo para a geração de renda e a autonomia financeira da comunidade. Dessa maneira, a agricultura familiar em Boi vai além da produção de alimentos, afirmando-se como expressão de identidade, pertencimento e resistência cultural, elementos centrais para a valorização e manutenção dos modos de vida tradicionais quilombolas.</p>
        </div>

        <div class="agricultura-midia">
            <div class="agricultura-hero-galeria">
                <div class="agricultura-foto"><img src="{{ asset('images/Boi/Agricultura/h1.jpg') }}" alt="Quilombo Boi 1"></div>
                <div class="agricultura-foto"><img src="{{ asset('images/Boi/Agricultura/h2.jpeg') }}" alt="Quilombo Boi 2"></div>
                <div class="agricultura-foto"><img src="{{ asset('images/Boi/Agricultura/h3.jpeg') }}" alt="Quilombo Boi 3"></div>
                <div class="agricultura-foto"><img src="{{ asset('images/Boi/Agricultura/h4.jpeg') }}" alt="Quilombo Boi 4"></div>
                <div class="agricultura-foto"><img src="{{ asset('images/Boi/Agricultura/h5.jpeg') }}" alt="Quilombo Boi 5"></div>
                <div class="agricultura-foto"><img src="{{ asset('images/Boi/Agricultura/h6.jpg') }}" alt="Quilombo Boi 6"></div>
            </div>
            <p class="agricultura-galeria-fonte">Fonte: Quilombo Boi; Projeto Mapeamento Gastronômico (2025).</p>
        </div>
    </div>
</section>
@endsection
