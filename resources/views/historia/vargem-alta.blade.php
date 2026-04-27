@extends('layouts.app')

@section('content')
<section class="historia-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.95), rgba(58, 15, 15, 0.35)), url('{{ asset('images/capa/alta.png') }}');">
<div class="historia-capa-conteudo">
        <h1>Quilombo Vargem Alta</h1>
        <span>História</span>
    </div>
</section>

<section class="historia-hero">
    <div class="historia-hero-container historia-hero-container--top">
        <div class="historia-hero-texto">

            <p>
                A Comunidade Quilombola de Vargem Alta, situada na área rural do município de Palmas de Monte Alto, Bahia,
                carrega uma história construída a partir da luta, da resistência e da união de seus ancestrais. Os primeiros
                habitantes enfrentaram diversas dificuldades para assegurar sua permanência no território e preservar suas
                tradições culturais. A agricultura sempre desempenhou papel central na economia e na vida social da comunidade,
                destacando-se o cultivo de feijão, mandioca, umbu-cajá, manga, goiaba, acerola, tamarindo e laranja, alimentos
                que garantem a subsistência das famílias e mantêm vivo o modo de vida tradicional quilombola.
            </p>

            <p>
                O reconhecimento oficial como comunidade quilombola foi concedido em 31 de dezembro de 2008, por meio da certificação
                emitida pela Fundação Cultural Palmares, com o apoio da Secretaria de Educação. Esse momento representou um avanço
                importante para Vargem Alta, possibilitando o acesso a benefícios como cestas básicas, assistência médica, caixas d’água,
                cisternas e programas voltados ao desenvolvimento rural. Além disso, essa certificação contribuiu para o fortalecimento da
                identidade quilombola e ampliou a visibilidade das demandas sociais e culturais da comunidade.
            </p>

            <p>
                No que diz respeito à organização interna, a liderança foi inicialmente assumida por Manoel José de Lima, que esteve à frente
                da comunidade durante quatro anos. Em seguida, a responsabilidade passou para Sidália Montalvão de Brito, que, a pedido dos
                moradores, exerce a função há quase dois anos. Sua atuação tem sido voltada para o fortalecimento da união entre os moradores
                e para a promoção de melhorias por meio de iniciativas culturais e sociais. Entre os avanços recentes, destacam-se a chegada
                da energia elétrica, a criação da Associação Comunitária, o acesso à internet e a implantação da fábrica de farinha, conquistas
                que reforçam a autonomia, a organização coletiva e a identidade quilombola de Vargem Alta.
            </p>

        </div>

        <div class="historia-midia">
            <div class="historia-hero-galeria historia-hero-galeria--vargem-alta">
                <div class="historia-foto"><img src="{{ asset('images/Vargem Alta/festejos/f3.jpeg') }}" alt="Vargem Alta 1"></div>
                <div class="historia-foto"><img src="{{ asset('images/Vargem Alta/guardia/g9.jpeg') }}" alt="Vargem Alta 2"></div>
                <div class="historia-foto"><img src="{{ asset('images/Vargem Alta/Agricultura/h1.jpeg') }}" alt="Vargem Alta 3"></div>
                <div class="historia-foto"><img src="{{ asset('images/Vargem Alta/historia/hi5.jpeg') }}" alt="Vargem Alta 4"></div>
                <div class="historia-foto"><img src="{{ asset('images/Vargem Alta/artesanato/a1.jpeg') }}" alt="Vargem Alta 5"></div>
                <div class="historia-foto"><img src="{{ asset('images/Vargem Alta/comida/p4.jpeg') }}" alt="Vargem Alta 6"></div>
            </div>
            <div class="historia-galeria-fontes">
                <p class="historia-galeria-fonte">Fonte: Quilombo Vargem Alta; Projeto Mapeamento Gastronômico (2025).</p>
            </div>
        </div>
    </div>
</section>
@endsection
