@extends('layouts.app')

@section('content')
<section class="historia-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.95), rgba(58, 15, 15, 0.35)), url('{{ asset('images/capa/boi.png') }}');">
    <div class="historia-capa-conteudo">
        <h1>Quilombo Boi</h1>
        <span>História</span>
    </div>
</section>

<section class="historia-hero">
    <div class="historia-hero-container historia-hero-container--top">
        <div class="historia-hero-texto">

            <p>
                A Comunidade Quilombola Boi encontra-se na zona rural do município de Pindaí, no estado da Bahia, sendo composta
                predominantemente por moradores nativos que nasceram e cresceram no próprio território. Sua trajetória histórica é
                marcada pela busca por autonomia, dignidade e reconhecimento, construída a partir da resistência de descendentes de
                pessoas escravizadas. Desde suas origens, a comunidade preserva práticas culturais e familiares ligadas à agricultura,
                à religiosidade, à música e às festas tradicionais, fortalecendo a memória coletiva e o sentimento de pertencimento.
            </p>

            <p>
                O processo de certificação quilombola representou um marco importante para a comunidade Boi, sendo resultado de pouco
                mais de um ano de mobilização coletiva dos moradores. Nesse período, foram reunidos documentos, registros históricos e
                relatos orais que comprovavam a ancestralidade e a formação territorial da comunidade. Esse trabalho contou com a
                participação fundamental da liderança local, exercida por Edmilson Moreira Santos, que teve papel decisivo na organização
                interna, na articulação com instituições públicas e no fortalecimento da identidade quilombola.
            </p>

            <p>
                A certificação oficial, concedida pela Fundação Cultural Palmares em 03 de fevereiro de 2017, consolidou o reconhecimento
                institucional da Comunidade Quilombola Boi e ampliou o acesso a políticas públicas e programas de desenvolvimento social
                e rural. A partir desse reconhecimento, a comunidade intensificou ações voltadas à valorização cultural, à agricultura
                familiar e à preservação dos saberes tradicionais. A expressão “negos do Boi”, anteriormente utilizada de forma
                pejorativa, foi ressignificada pelos moradores como símbolo de resistência, orgulho e afirmação identitária, reforçando
                a força histórica e cultural do quilombo.
            </p>

        </div>

        <div class="historia-midia">
            <div class="historia-hero-galeria historia-hero-galeria--boi">
                <div class="historia-foto"><img src="{{ asset('images/Boi/festejos/f6.jpeg') }}" alt="Quilombo Boi 1"></div>
                <div class="historia-foto"><img src="{{ asset('images/Boi/guardia/g6.jpeg') }}" alt="Quilombo Boi 2"></div>
                <div class="historia-foto"><img src="{{ asset('images/Boi/Agricultura/h1.jpg') }}" alt="Quilombo Boi 3"></div>
                <div class="historia-foto"><img src="{{ asset('images/Boi/historia/hi1.jpeg') }}" alt="Quilombo Boi 4"></div>
                <div class="historia-foto"><img src="{{ asset('images/Boi/artesanato/a10.jpeg') }}" alt="Quilombo Boi 5"></div>
                <div class="historia-foto"><img src="{{ asset('images/Boi/comida/p1.jpeg') }}" alt="Quilombo Boi 6"></div>
            </div>
            <div class="historia-galeria-fontes">
                <p class="historia-galeria-fonte">Fonte: Quilombo Boi; Projeto Mapeamento Gastronômico (2025).</p>
            </div>
        </div>
    </div>
</section>
@endsection
