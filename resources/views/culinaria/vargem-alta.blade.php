@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.80), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Vargem Alta/comida/pamonha.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Vargem Alta: Sabores da Terra e da Memória</h1>
        <span>Culinária</span>
    </div>
</section>

<section class="culinaria-hero">
    <div class="culinaria-hero-container culinaria-hero-container--top">
        <div class="culinaria-hero-texto">

            <p>A culinária da Comunidade Quilombola de Vargem Comprida é uma expressão viva de sua história, identidade e ancestralidade. Os ingredientes cultivados localmente, como mandioca, umbu-cajá, feijão, manga e outros frutos nativos, são transformados em pratos que atravessam gerações, mantendo viva a memória coletiva e fortalecendo a relação entre a terra e a alimentação. Esses alimentos refletem o modo de vida tradicional da comunidade e revelam saberes transmitidos ao longo do tempo.</p>

            <p>Entre os pratos mais tradicionais destacam-se a canjica (01), o cortado de maxixe com nata (02), a paçoca de gergelim (03) e a pamonha (04), além da produção de doces e geleias artesanais. A fábrica de farinha ocupa papel central nesse processo, funcionando como espaço de trabalho coletivo, colaboração comunitária e autonomia produtiva. É nesse ambiente que técnicas tradicionais são preservadas e compartilhadas, fortalecendo os vínculos sociais e culturais da comunidade.</p>

            <p>A canjica é preparada a partir do milho branco, que passa por um período de descanso em água antes de ser cozido até ficar macio. Após o cozimento, é enriquecida com leite, coco e açúcar, resultando em um prato cremoso e aromático, geralmente finalizado com canela. Tradicionalmente servida em momentos festivos e encontros familiares, a canjica representa partilha, acolhimento e celebração coletiva.</p>

            <p>O maxixe, bastante presente nas hortas da comunidade, é cortado e preparado de forma simples, sendo frito e posteriormente incorporado à nata, formando um prato saboroso que acompanha outras refeições. O cortado de maxixe com nata revela a criatividade no aproveitamento dos alimentos cultivados localmente e reforça a relação direta entre agricultura familiar e alimentação cotidiana.</p>

            <p>A paçoca de gergelim é resultado de um processo artesanal que envolve a limpeza, torra e trituração das sementes, misturadas posteriormente a ingredientes tradicionais. Muitas vezes preparada com o auxílio do pilão, essa receita carrega marcas da ancestralidade e do trabalho manual, sendo símbolo de resistência cultural e da preservação de técnicas tradicionais.</p>

            <p>Já a pamonha é feita a partir do milho verde, cujos grãos são triturados e misturados antes de serem envoltos na própria palha e levados ao cozimento. Seu preparo costuma reunir familiares e vizinhos, fortalecendo os laços comunitários. Presente em diferentes ocasiões, a pamonha representa união, tradição e continuidade dos saberes transmitidos entre gerações.</p>

            <p>O preparo dos alimentos ocorre, em muitos momentos, de forma coletiva, reunindo famílias e diferentes gerações em um espaço de troca de saberes, convivência e celebração. Durante essas atividades, receitas, histórias e técnicas são transmitidas oralmente, transformando a culinária em um importante símbolo de resistência cultural e afirmação identitária. Preservar essas práticas significa manter viva a memória da comunidade, fortalecer o orgulho de suas origens e garantir que os saberes ancestrais continuem sendo transmitidos às futuras gerações.</p>

        </div>

        <div class="culinaria-midia">
            <div class="culinaria-hero-galeria culinaria-hero-galeria--vertical">
                <div class="culinaria-foto"><span class="culinaria-foto-numero">01</span><img src="{{ asset('images/Vargem Alta/comida/p1.jpeg') }}" alt="Vargem Alta 1"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">02</span><img src="{{ asset('images/Vargem Alta/comida/p2.jpeg') }}" alt="Vargem Alta 2"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">03</span><img src="{{ asset('images/Vargem Alta/comida/p3.jpeg') }}" alt="Vargem Alta 3"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">04</span><img src="{{ asset('images/Vargem Alta/comida/p4.jpeg') }}" alt="Vargem Alta 4"></div>
            </div>
            <p class="culinaria-galeria-fonte">Fonte: Quilombo Vargem Alta; Projeto Mapeamento Gastronômico (2025).</p>
        </div>
    </div>
</section>
@endsection
