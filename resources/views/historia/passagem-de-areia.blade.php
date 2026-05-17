@extends('layouts.app')

@section('content')
<section class="historia-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.95), rgba(58, 15, 15, 0.35)), url('{{ asset('images/capa/areia.png') }}');">
    <div class="historia-capa-conteudo">
        <h1>Quilombo Passagem de Areia</h1>
        <span>História</span>
    </div>
</section>

<section class="historia-hero">
    <div class="historia-hero-container historia-hero-container--top">
        <div class="historia-hero-texto">

            <p>
                A Comunidade Quilombola de Passagem de Areia tem sua origem situada por volta da década de 1950, período em que os primeiros
                moradores chegaram à região e passaram a desenvolver a agricultura como principal meio de subsistência. O nome da comunidade
                está diretamente associado à grande presença de areia no território, uma característica natural que deu identidade ao local.
                Vindos de diferentes localidades, esses moradores se fixaram na área, constituíram famílias e estabeleceram fortes vínculos
                com a terra, iniciando uma trajetória coletiva marcada pelo trabalho, pela resistência e pelo sentimento de pertencimento
                ao território.
            </p>

            <p>
                O reconhecimento oficial como comunidade quilombola aconteceu em 2011, por meio da certificação concedida pela Fundação
                Cultural Palmares, após um processo que envolveu a coleta de documentos, relatos orais e estudos sobre a ancestralidade da
                população local. Esse momento representou um marco relevante para a afirmação da identidade quilombola de Passagem de Areia,
                ao mesmo tempo em que evidenciou desafios internos relacionados ao pertencimento e à organização coletiva. Ainda assim, a
                certificação ampliou a visibilidade da comunidade e possibilitou o acesso a políticas públicas, como a participação em editais
                e a implantação de infraestruturas básicas, contribuindo para a melhoria das condições de vida dos moradores.
            </p>

            <p>
                Atualmente, a liderança da comunidade é exercida por <strong>Rosângela Maria da Silva</strong>, mulher negra, católica, de 41 anos, nascida no próprio
                território e com ensino médio completo, que desempenha essa função há aproximadamente dois anos. Sua atuação é pautada no
                compromisso com a valorização da identidade quilombola, a defesa dos direitos coletivos e a preservação das tradições culturais.
                Durante sua gestão, são desenvolvidas ações voltadas ao fortalecimento da participação comunitária, à proteção do território e
                à continuidade dos saberes ancestrais, mantendo viva a memória coletiva e reforçando os laços de união entre os moradores de
                Passagem de Areia.
            </p>

        </div>

        <div class="historia-midia">
            <div class="historia-hero-galeria historia-hero-galeria--passagem">
                <div class="historia-foto"><img src="{{ asset('images/Passagem/festejos/f2.jpeg') }}" alt="Passagem de Areia 1"></div>
                <div class="historia-foto"><img src="{{ asset('images/Passagem/guardia/g5.jpeg') }}" alt="Passagem de Areia 2"></div>
                <div class="historia-foto"><img src="{{ asset('images/Passagem/Agricultura/h2.jpeg') }}" alt="Passagem de Areia 3"></div>
                <div class="historia-foto"><img src="{{ asset('images/Passagem/historia/hi1.jpeg') }}" alt="Passagem de Areia 4"></div>
                <div class="historia-foto"><img src="{{ asset('images/Passagem/artesanato/a3.jpeg') }}" alt="Passagem de Areia 5"></div>
                <div class="historia-foto"><img src="{{ asset('images/Passagem/comida/p5.jpeg') }}" alt="Passagem de Areia 6"></div>
            </div>
            <div class="historia-galeria-fontes">
                <p class="historia-galeria-fonte">Fonte: Quilombo Passagem de Areia; Projeto Mapeamento Gastronômico (2025).</p>
            </div>
        </div>
    </div>
</section>
@endsection
