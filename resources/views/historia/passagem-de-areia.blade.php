@extends('layouts.app')

@section('content')
<section class="historia-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.95), rgba(58, 15, 15, 0.35)), url('{{ asset('images/capa/areia.png') }}');">
    <div class="historia-capa-conteudo">
        <h1>Quilombo Passagem de Areia</h1>
    </div>
</section>

<section class="historia-hero">
    <div class="historia-hero-container">
        <div class="historia-hero-texto">

            <p>
                A Comunidade Quilombola de Passagem de Areia teve sua origem por volta da década de 1950, quando os primeiros moradores
                chegaram à região e passaram a desenvolver atividades agrícolas como principal forma de subsistência. O nome da comunidade
                está relacionado à presença marcante de areia no território, característica natural que acabou por nomear o local.
                Vindos de diferentes regiões, esses moradores se estabeleceram, formaram famílias e construíram vínculos profundos com
                a terra, dando início a uma trajetória coletiva marcada pelo trabalho, pela resistência e pelo sentimento de pertencimento
                ao território.
            </p>

            <p>
                O reconhecimento oficial como comunidade quilombola ocorreu em 2011, por meio da certificação concedida pela
                Fundação Cultural Palmares, após um processo que envolveu levantamento documental, relatos orais e estudos sobre a
                ancestralidade local. Esse processo representou um marco importante para a consolidação da identidade quilombola de
                Passagem de Areia, ao mesmo tempo em que evidenciou desafios internos relacionados ao pertencimento e à organização
                coletiva. Ainda assim, a certificação ampliou a visibilidade da comunidade e possibilitou o acesso a políticas públicas,
                como a participação em editais e a implantação de infraestruturas básicas, contribuindo para a melhoria das condições de
                vida dos moradores.
            </p>

            <p>
                Atualmente, a liderança comunitária é exercida por Rosângela, mulher negra, católica, de 41 anos, nativa do território
                e com ensino médio completo, que atua na função há cerca de dois anos. Sua gestão é marcada pelo compromisso com a
                valorização da identidade quilombola, a defesa dos direitos coletivos e a preservação das tradições culturais.
                Sob sua liderança, são articuladas ações voltadas ao fortalecimento da participação comunitária, à proteção do
                território e à continuidade dos saberes ancestrais, mantendo viva a memória coletiva e reforçando a união entre
                os moradores de Passagem de Areia.
            </p>

        </div>

        <div class="historia-hero-galeria">
            <div class="historia-foto"><img src="{{ asset('images/Passagem/festejos/f2.jpeg') }}" alt="Passagem de Areia 1"></div>
            <div class="historia-foto"><img src="{{ asset('images/Passagem/guardia/g5.jpeg') }}" alt="Passagem de Areia 2"></div>
            <div class="historia-foto"><img src="{{ asset('images/Passagem/Agricultura/h2.jpeg') }}" alt="Passagem de Areia 3"></div>
            <div class="historia-foto"><img src="{{ asset('images/Passagem/historia/hi1.jpeg') }}" alt="Passagem de Areia 4"></div>
            <div class="historia-foto"><img src="{{ asset('images/Passagem/artesanato/a3.jpeg') }}" alt="Passagem de Areia 5"></div>
            <div class="historia-foto"><img src="{{ asset('images/Passagem/comida/p5.jpeg') }}" alt="Passagem de Areia 6"></div>
        </div>
    </div>
</section>
@endsection
