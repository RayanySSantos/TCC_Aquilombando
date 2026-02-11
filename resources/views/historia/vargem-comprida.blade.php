@extends('layouts.app')

@section('content')
<section class="historia-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.95), rgba(58, 15, 15, 0.35)), url('{{ asset('images/capa/comprida.png') }}');">
    <div class="historia-capa-conteudo">
        <h1>Quilombo Vargem Comprida</h1>
        <span>História</span>
    </div>
</section>

<section class="historia-hero">
    <div class="historia-hero-container">
        <div class="historia-hero-texto">

            <p>
                A Comunidade Quilombola de Vargem Comprida está localizada na zona rural do município de Palmas de Monte Alto, no estado
                da Bahia, e preserva com orgulho a memória e os costumes herdados de seus antepassados. Segundo os relatos dos moradores,
                os primeiros habitantes vieram da região de Macaúbas, fugindo da escravidão em busca de liberdade, segurança e terras para
                viver. Desde sua formação, a comunidade se fortaleceu por meio da valorização de suas raízes, da união entre as famílias
                e do esforço coletivo para manter viva a cultura quilombola e o vínculo com o território.
            </p>

            <p>
                O reconhecimento oficial enquanto comunidade quilombola ocorreu em 15 de maio de 2016, por meio da certificação concedida
                pela Fundação Cultural Palmares. Esse processo envolveu a coleta de relatos orais, registros audiovisuais e a participação
                ativa das lideranças e matriarcas da comunidade, que contribuíram para a consolidação da identidade quilombola local.
                A certificação representou um marco histórico para Vargem Comprida, fortalecendo o sentimento de pertencimento e ampliando
                o acesso a políticas públicas e programas de apoio voltados às populações tradicionais.
            </p>

            <p>
                Atualmente, a comunidade é liderada por Leonardo, morador que sempre viveu em Vargem Comprida e exerce a função com
                dedicação há cerca de três anos. Católico, formado no ensino superior e agricultor, ele defende a preservação cultural
                como caminho fundamental para fortalecer as novas gerações. Entre as figuras mais importantes da comunidade destaca-se
                Dona Silvalina Maria de Oliveira, carinhosamente chamada de “Vó”, reconhecida como matriarca e guardiã dos saberes
                tradicionais. Sua trajetória simboliza a continuidade da memória coletiva, sendo responsável por transmitir às novas
                gerações histórias, práticas de artesanato e conhecimentos culinários que sustentam a identidade quilombola de
                Vargem Comprida.
            </p>

        </div>

        <div class="historia-hero-galeria">
            <div class="historia-foto"><img src="{{ asset('images/Vargem Comprida/festejos/f1.jpeg') }}" alt="Vargem Comprida 1"></div>
            <div class="historia-foto"><img src="{{ asset('images/Vargem Comprida/guardia/g1.jpeg') }}" alt="Vargem Comprida 2"></div>
            <div class="historia-foto"><img src="{{ asset('images/Vargem Comprida/Agricultura/h1.jpeg') }}" alt="Vargem Comprida 3"></div>
            <div class="historia-foto"><img src="{{ asset('images/Vargem Comprida/historia/hi3.jpeg') }}" alt="Vargem Comprida 4"></div>
            <div class="historia-foto"><img src="{{ asset('images/Vargem Comprida/Artesanato/a3.jpeg') }}" alt="Vargem Comprida 5"></div>
            <div class="historia-foto"><img src="{{ asset('images/Vargem Comprida/comida/p7.jpeg') }}" alt="Vargem Comprida 6"></div>
        </div>
    </div>
</section>
@endsection
