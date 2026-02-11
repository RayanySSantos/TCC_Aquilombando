@extends('layouts.app')

@section('content')
<section class="historia-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.95), rgba(58, 15, 15, 0.35)), url('{{ asset('images/capa/boi.png') }}');">
    <div class="historia-capa-conteudo">
        <h1>Quilombo de Boi</h1>
        <span>História</span>
    </div>
</section>

<section class="historia-hero">
    <div class="historia-hero-container">
        <div class="historia-hero-texto">

            <p>
                A Comunidade Quilombola de Boi está localizada na zona rural do município de Pindaí, no estado da Bahia, sendo formada
                majoritariamente por moradores nativos que nasceram e cresceram no próprio território. Sua trajetória histórica é marcada
                pela luta por autonomia, dignidade e reconhecimento, construída a partir da resistência de descendentes de pessoas
                escravizadas. Desde suas origens, a comunidade mantém vivas práticas culturais e familiares relacionadas à agricultura,
                à religiosidade, à música e às festas tradicionais, fortalecendo a memória coletiva e o sentimento de pertencimento.
            </p>

            <p>
                O processo de certificação quilombola representou um marco fundamental para a comunidade de Boi, resultado de pouco mais
                de um ano de mobilização coletiva dos moradores. Durante esse período, foram reunidos documentos, registros históricos e
                relatos orais que comprovavam a ancestralidade e a formação territorial da comunidade. Esse trabalho contou com a atuação
                decisiva da liderança local, exercida por Edmilson Moreira Santos, que teve papel essencial na organização interna,
                na articulação com instituições públicas e no fortalecimento da identidade quilombola.
            </p>

            <p>
                A certificação oficial, concedida pela Fundação Cultural Palmares em 03 de fevereiro de 2017, consolidou o reconhecimento
                institucional da Comunidade Quilombola de Boi e ampliou o acesso a políticas públicas e programas de desenvolvimento
                social e rural. A partir desse reconhecimento, a comunidade intensificou ações voltadas à valorização cultural,
                à agricultura familiar e à preservação dos saberes tradicionais. O termo “negos do Boi”, antes utilizado de forma
                pejorativa, foi ressignificado pelos moradores como símbolo de resistência, orgulho e afirmação identitária, reforçando
                a força histórica e cultural do quilombo.
            </p>

        </div>

        <div class="historia-hero-galeria">
            <div class="historia-foto"><img src="{{ asset('images/Boi/festejos/f6.jpeg') }}" alt="Quilombo de Boi 1"></div>
            <div class="historia-foto"><img src="{{ asset('images/Boi/guardia/g6.jpeg') }}" alt="Quilombo de Boi 2"></div>
            <div class="historia-foto"><img src="{{ asset('images/Boi/Agricultura/h1.jpg') }}" alt="Quilombo de Boi 3"></div>
            <div class="historia-foto"><img src="{{ asset('images/Boi/historia/hi1.jpeg') }}" alt="Quilombo de Boi 4"></div>
            <div class="historia-foto"><img src="{{ asset('images/Boi/artesanato/a10.jpeg') }}" alt="Quilombo de Boi 5"></div>
            <div class="historia-foto"><img src="{{ asset('images/Boi/comida/p1.jpeg') }}" alt="Quilombo de Boi 6"></div>
        </div>
    </div>
</section>
@endsection
