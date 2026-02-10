@extends('layouts.app')

@section('content')
<section class="historia-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.95), rgba(58, 15, 15, 0.35)), url('{{ asset('images/capa/lagoa.png') }}');">
    <div class="historia-capa-conteudo">
        <h1>Quilombo Lagoa dos Anjos</h1>
    </div>
</section>

<section class="historia-hero">
    <div class="historia-hero-container">
        <div class="historia-hero-texto">
            <h2 class="historia-titulo">Lagoa dos Anjos: Trajetória de União e Resistência</h2>

            <p>
                A Comunidade Quilombola de Lagoa dos Anjos está localizada no município de Candiba, no estado da Bahia, e possui uma
                trajetória marcada pela união, pela solidariedade e pela luta coletiva de seus moradores. A história da comunidade remonta
                aos primeiros habitantes que, movidos pelo espírito comunitário, doaram terrenos para a construção dos salões coletivos.
                Esses espaços tornaram-se fundamentais para encontros, celebrações e fortalecimento dos laços sociais, estruturando uma
                vida comunitária baseada na coletividade, no respeito mútuo e na preservação das tradições culturais.
            </p>

            <p>
                O reconhecimento oficial de Lagoa dos Anjos como comunidade quilombola foi resultado de um processo de intensa mobilização
                interna. Dois sobrinhos tiveram papel essencial ao incentivar a participação dos moradores e a busca pelos direitos
                coletivos, fortalecendo o sentimento de pertencimento e identidade. Esse esforço culminou, em 2011, na certificação
                concedida pela Fundação Cultural Palmares, marco histórico que consolidou a identidade quilombola da comunidade e ampliou
                o acesso a políticas públicas e projetos voltados ao seu fortalecimento social e cultural.
            </p>

            <p>
                Nesse percurso, a liderança comunitária exerceu papel decisivo, com destaque para a atuação de Luciene Alves Santos Silva,
                que por anos esteve à frente das iniciativas locais, articulando apoios e buscando recursos que resultaram em melhorias
                na infraestrutura e na valorização cultural. Atualmente, a liderança é exercida por Jorge Auto dos Santos, que dá
                continuidade a esse legado, trabalhando para manter vivas as tradições e assegurar que as novas gerações compreendam a
                importância da história, da resistência e da identidade quilombola de Lagoa dos Anjos.
            </p>

        </div>

        <div class="historia-hero-galeria">
            <div class="historia-foto"><img src="{{ asset('images/Lagoa dos Anjos/festejos/f2.jpeg') }}" alt="Lagoa dos Anjos 1"></div>
            <div class="historia-foto"><img src="{{ asset('images/Lagoa dos Anjos/guardia/g7.jpeg') }}" alt="Lagoa dos Anjos 2"></div>
            <div class="historia-foto"><img src="{{ asset('images/Lagoa dos Anjos/Agricultura/h1.jpeg') }}" alt="Lagoa dos Anjos 3"></div>
            <div class="historia-foto"><img src="{{ asset('images/Lagoa dos Anjos/historia/hi1.jpeg') }}" alt="Lagoa dos Anjos 4"></div>
            <div class="historia-foto"><img src="{{ asset('images/Lagoa dos Anjos/artesanato/a2.jpeg') }}" alt="Lagoa dos Anjos 5"></div>
            <div class="historia-foto"><img src="{{ asset('images/Lagoa dos Anjos/comida/p4.jpeg') }}" alt="Lagoa dos Anjos 6"></div>
        </div>
    </div>
</section>
@endsection
