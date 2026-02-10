@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Lagoa dos Anjos/artesanato/a1.jpeg') }}');">
    <div class="secao-capa-conteudo">
        <h1>Lagoa dos Anjos: Artesanato e Resistência Cultural</h1>
        <span>Artesanato</span>
    </div>
</section>

<section class="artesanato-hero">
    <div class="artesanato-hero-container">
        <div class="artesanato-hero-texto">
            <h2 class="secao-titulo">Lagoa dos Anjos: Artesanato e Resistência Cultural</h2>

            <p>O artesanato da Comunidade Quilombola de Lagoa dos Anjos é uma das expressões mais autênticas da criatividade e da resistência cultural de seus moradores. Entre os principais trabalhos produzidos estão toucas, peças de crochê com linha de algodão, panos confeccionados a partir de retalhos, bolsas, colheres de pau e pilões de madeira. Cada peça carrega parte da história e da identidade local, reafirmando a importância da preservação dos saberes manuais tradicionais.</p>

            <p>As técnicas artesanais são repassadas de geração em geração, fortalecendo a transmissão do conhecimento ancestral. As mulheres da comunidade exercem papel central nesse processo, sendo responsáveis por ensinar e manter vivas as práticas de confecção. O aprendizado ocorre, sobretudo, em momentos coletivos, como rodas de conversa e atividades compartilhadas, fortalecendo os laços familiares e comunitários.</p>

            <p>Além de seu valor cultural, o artesanato desempenha função importante na complementação da renda das famílias, pois as peças produzidas são comercializadas em feiras, eventos e encontros comunitários. Preservar o artesanato significa também preservar a memória da comunidade, já que cada objeto produzido representa continuidade cultural, identidade quilombola e resistência. Dessa forma, os trabalhos manuais garantem que as futuras gerações conheçam e valorizem o legado deixado pelos ancestrais.</p>

        </div>

        <div class="artesanato-hero-galeria">
            <div class="artesanato-foto"><img src="{{ asset('images/Lagoa dos Anjos/artesanato/a1.jpeg') }}" alt="Lagoa dos Anjos 1"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Lagoa dos Anjos/artesanato/a2.jpeg') }}" alt="Lagoa dos Anjos 2"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Lagoa dos Anjos/artesanato/a3.jpeg') }}" alt="Lagoa dos Anjos 3"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Lagoa dos Anjos/artesanato/a1.jpeg') }}" alt="Lagoa dos Anjos 4"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Lagoa dos Anjos/artesanato/a2.jpeg') }}" alt="Lagoa dos Anjos 5"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Lagoa dos Anjos/artesanato/a3.jpeg') }}" alt="Lagoa dos Anjos 6"></div>
        </div>
    </div>
</section>
@endsection
