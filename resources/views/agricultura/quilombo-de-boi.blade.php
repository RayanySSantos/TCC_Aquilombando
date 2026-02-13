@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Boi/Agricultura/boi.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Quilombo de Boi: Agricultura e Sustento</h1>
        <span>Agricultura Familiar</span>
    </div>
</section>

<section class="agricultura-hero">
    <div class="agricultura-hero-container">
        <div class="agricultura-hero-texto">

            <p>A agricultura familiar é a base da vida cotidiana na Comunidade Quilombola de Boi, desempenhando papel fundamental na subsistência e na organização social do território. Os moradores cultivam milho, feijão, mandioca, maxixe, coco, frutas e hortaliças em pequenos roçados próximos às casas, garantindo alimentos frescos, saudáveis e fortalecendo a autonomia alimentar das famílias. Essas práticas agrícolas seguem métodos tradicionais, transmitidos entre gerações, que respeitam os ciclos naturais da terra, o regime das chuvas e a preservação do solo, reafirmando os saberes ancestrais e a relação de cuidado com a natureza.</p>

            <p>O cultivo é realizado de forma coletiva, envolvendo pais, filhos e netos em um processo contínuo de aprendizado e partilha. Os mais velhos transmitem conhecimentos sobre plantio, colheita e manejo da terra, ensinando, na prática, a importância do respeito ao meio ambiente e da preservação dos recursos naturais. Essa convivência diária nos roçados fortalece os vínculos familiares e comunitários, ao mesmo tempo em que assegura a continuidade das tradições culturais que estruturam o modo de vida quilombola.</p>

            <p>Além de garantir o sustento das famílias, a produção agrícola possibilita a comercialização dos excedentes em feiras e mercados locais, contribuindo para a geração de renda e a autonomia financeira da comunidade. Dessa forma, a agricultura familiar em Boi ultrapassa a função de produção de alimentos, afirmando-se como expressão de identidade, pertencimento e resistência cultural, elementos centrais para a valorização e manutenção dos modos de vida tradicionais quilombolas.</p>

        </div>

        <div class="agricultura-hero-galeria">
            <div class="agricultura-foto"><img src="{{ asset('images/Boi/Agricultura/h1.jpg') }}" alt="Quilombo de Boi 1"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Boi/Agricultura/h2.jpeg') }}" alt="Quilombo de Boi 2"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Boi/Agricultura/h3.jpeg') }}" alt="Quilombo de Boi 3"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Boi/Agricultura/h4.jpeg') }}" alt="Quilombo de Boi 4"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Boi/Agricultura/h5.jpeg') }}" alt="Quilombo de Boi 5"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Boi/Agricultura/h6.jpg') }}" alt="Quilombo de Boi 6"></div>
        </div>
    </div>
</section>
@endsection
