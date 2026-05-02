@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.80), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Lagoa dos Anjos/artesanato/artesanato04.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Lagoa dos Anjos: Artesanato e Resistência Cultural</h1>
        <span>Artesanato</span>
    </div>
</section>

<section class="artesanato-hero">
    <div class="artesanato-hero-container artesanato-hero-container--top">
        <div class="artesanato-hero-texto">

            <p>O artesanato da Comunidade Quilombola de Lagoa dos Anjos representa uma das manifestações mais genuínas da criatividade e da resistência cultural de seus moradores. Entre os principais produtos confeccionados estão toucas, peças em crochê com linha de algodão, panos feitos a partir de retalhos, bolsas, colheres de pau e pilões de madeira. Cada item produzido carrega parte da história e da identidade local, reafirmando a importância de preservar os saberes manuais tradicionais.</p>

            <p>As técnicas artesanais são transmitidas de geração em geração, fortalecendo a continuidade do conhecimento ancestral. As mulheres da comunidade desempenham papel essencial nesse processo, sendo responsáveis por ensinar e manter vivas as práticas de produção. O aprendizado acontece, principalmente, em momentos coletivos, como rodas de conversa e atividades compartilhadas, contribuindo para o fortalecimento dos laços familiares e comunitários.</p>

            <p>Além de seu valor cultural, o artesanato também exerce um papel relevante na complementação da renda das famílias, já que as peças produzidas são comercializadas em feiras, eventos e encontros comunitários. Preservar o artesanato é também preservar a memória da comunidade, pois cada objeto produzido representa continuidade cultural, identidade quilombola e resistência. Dessa maneira, os trabalhos manuais asseguram que as futuras gerações conheçam e valorizem o legado deixado pelos ancestrais.</p>
        
        </div>

        <div class="artesanato-midia">
            <div class="artesanato-hero-galeria artesanato-hero-galeria--vertical artesanato-hero-galeria--lagoa">
                <div class="artesanato-foto"><img src="{{ asset('images/Lagoa dos Anjos/artesanato/a1.jpeg') }}" alt="Lagoa dos Anjos 1"></div>
                <div class="artesanato-foto"><img src="{{ asset('images/Lagoa dos Anjos/artesanato/a2.jpeg') }}" alt="Lagoa dos Anjos 2"></div>
            </div>
                <p class="artesanato-galeria-fonte">Fonte: Quilombo Lagoa dos Anjos; Projetos “Mapeamento Gastronômico”; “Culinária Ancestral”; e “Vozes do Sertão” (2025).</p>
        </div>
    </div>
</section>
@endsection
