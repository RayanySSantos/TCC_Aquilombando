@extends('layouts.app')

@section('content')
<section class="historia-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.95), rgba(58, 15, 15, 0.35)), url('{{ asset('images/capa/lagoa.png') }}');">
    <div class="historia-capa-conteudo">
        <h1>Quilombo Lagoa dos Anjos</h1>
        <span>História</span>
    </div>
</section>

<section class="historia-hero">
    <div class="historia-hero-container historia-hero-container--top">
        <div class="historia-hero-texto">

            <p>
                A Comunidade Quilombola de Lagoa dos Anjos está situada no município de Candiba, no estado da Bahia, e apresenta uma
                trajetória construída a partir da união, da solidariedade e da luta coletiva de seus moradores. A origem da comunidade
                remonta aos primeiros habitantes que, guiados pelo espírito comunitário, cederam terrenos para a construção da igreja e do salão comunitário. Esses espaços tornaram-se essenciais para a realização de encontros, celebrações e para o fortalecimento dos
                vínculos sociais, estruturando uma vida comunitária baseada na coletividade, no respeito mútuo e na preservação dos costumes e das tradições.
            </p>

            <p>
                O reconhecimento de Lagoa dos Anjos como comunidade quilombola foi resultado de um processo marcado por forte
                mobilização interna. Nesse processo, o quilombola João Alves dos Santos desempenhou papel fundamental ao incentivar a união dos moradores e a busca pelos direitos coletivos, fortalecendo o sentimento de pertencimento e a identidade da comunidade. Esse movimento resultou,
                em 2011, na certificação concedida pela Fundação Cultural Palmares, um marco histórico que consolidou a identidade
                quilombola local e ampliou o acesso a políticas públicas e projetos voltados ao fortalecimento social e cultural.
            </p>

            <p>
                Ao longo desse processo, a liderança comunitária desempenhou papel essencial, destacando-se a atuação de <strong>Luciene Alves Santos Silva (1)</strong>, conhecida carinhosamente como tia Iyô, que por anos esteve à frente das iniciativas locais, articulando parcerias e buscando recursos que contribuíram para melhorias na infraestrutura e na valorização dos saberes quilombolas. Atualmente, a liderança é exercida por Jorge
                Auto dos Santos, que dá continuidade a esse trabalho, atuando para manter vivas as tradições e garantir que as novas
                gerações compreendam a importância da história, da resistência e da identidade quilombola de Lagoa dos Anjos.
            </p>

        </div>

        <div class="historia-midia">
            <div class="historia-hero-galeria">
                <div class="historia-foto"><img src="{{ asset('images/Lagoa dos Anjos/festejos/f2.jpeg') }}" alt="Lagoa dos Anjos 1"></div>
                <div class="historia-foto"><img src="{{ asset('images/Lagoa dos Anjos/guardia/g7.jpeg') }}" alt="Lagoa dos Anjos 2"></div>
                <div class="historia-foto"><img src="{{ asset('images/Lagoa dos Anjos/Agricultura/h1.jpeg') }}" alt="Lagoa dos Anjos 3"></div>
                <div class="historia-foto"><span class="historia-numero">1</span><img src="{{ asset('images/Lagoa dos Anjos/historia/hi1.jpeg') }}" alt="Lagoa dos Anjos 4"></div>
                <div class="historia-foto"><img src="{{ asset('images/Lagoa dos Anjos/artesanato/a2.jpeg') }}" alt="Lagoa dos Anjos 5"></div>
                <div class="historia-foto"><img src="{{ asset('images/Lagoa dos Anjos/comida/p4.jpeg') }}" alt="Lagoa dos Anjos 6"></div>
            </div>
            <div class="historia-galeria-fontes">
                <p class="historia-galeria-fonte">Fonte: Quilombo Lagoa dos Anjos; Projetos “Mapeamento Gastronômico”; “Culinária Ancestral”; e “Vozes do Sertão” (2025).</p>
            </div>
        </div>
    </div>
</section>
@endsection
