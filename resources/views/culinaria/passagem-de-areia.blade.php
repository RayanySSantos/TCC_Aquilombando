@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.80), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Passagem/comida/farofa.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Passagem de Areia: Culinária de Partilha e Afeto</h1>
        <span>Culinária</span>
    </div>
</section>

<section class="culinaria-hero">
    <div class="culinaria-hero-container culinaria-hero-container--top">
        <div class="culinaria-hero-texto">

            <p>A culinária da Comunidade Quilombola de Passagem de Areia representa uma expressão direta da agricultura familiar e da ancestralidade que sustenta o modo de vida local. Os ingredientes cultivados no próprio território, como palma, mandioca, manga, caju e batata-doce, são transformados em preparações que atravessam gerações, preservando a memória coletiva e reafirmando a estreita relação entre alimentação, território e identidade cultural. Cada alimento reúne saberes acumulados ao longo do tempo e reflete a história de resistência e pertencimento da comunidade.</p>

            <p>Entre os pratos mais tradicionais destacam-se o chimango (01), a farofa de frango (02), a maniçoba (03), a farofa de boi (04) e o cortado de palma (05), preparados a partir de técnicas transmitidas oralmente, sobretudo pelas mulheres mais velhas. Esses modos de preparo preservam sabores característicos e também significados simbólicos e afetivos, ligados às vivências familiares, às celebrações comunitárias e à memória dos antepassados.</p>

            <p>O chimango é preparado a partir da massa de tapioca, misturada com leite, ovos e sal, sendo cuidadosamente amassado, moldado e levado para assar no fogão a lenha. Seu preparo remete às práticas tradicionais do campo e ao uso do forno e do fogo como elementos centrais da cozinha quilombola, sendo um alimento que reúne a família em torno do seu processo artesanal.</p>

            <p>A farofa de frango é feita com o frango cozido e desfiado, posteriormente refogado com toucinho e temperos da própria comunidade, antes de receber a farinha que dá consistência ao prato. Presente em encontros familiares e celebrações, ela representa fartura, partilha e o aproveitamento integral dos alimentos produzidos no território.</p>

            <p>A maniçoba, preparada com as folhas novas da mandioca, passa por um processo cuidadoso de lavagem, cozimento e refogado com toucinho e temperos tradicionais. Esse prato exige tempo e atenção em seu preparo, simbolizando dedicação, tradição e a permanência de saberes ancestrais ligados ao cultivo da mandioca.</p>

            <p>A farofa de boi segue um processo semelhante ao da farofa de frango, utilizando a carne cozida e desfiada, refogada com toucinho e temperos antes da adição da farinha. É um prato que reforça a importância da criação animal e da agricultura familiar para a segurança alimentar da comunidade.</p>

            <p>O cortado de palma é preparado a partir da retirada dos espinhos, corte e fervura da palma, seguida do refogado com toucinho e temperos frescos. Muito presente no cotidiano da comunidade, esse prato revela a capacidade de adaptação ao semiárido e a valorização dos recursos disponíveis no próprio território.</p>

            <p>O preparo dos alimentos ocorre, em grande parte, de forma coletiva, reunindo famílias em momentos de partilha, aprendizado e celebração. Durante essas atividades, os saberes culinários são transmitidos às novas gerações, fortalecendo os laços comunitários e garantindo a continuidade das tradições alimentares. Mais do que sustento, a culinária de Passagem de Areia representa um símbolo de resistência cultural e afirmação da identidade quilombola, assegurando que seus saberes e sabores continuem vivos ao longo do tempo.</p>

        </div>

        <div class="culinaria-midia">
            <div class="culinaria-hero-galeria culinaria-hero-galeria--vertical">
                <div class="culinaria-foto"><span class="culinaria-foto-numero">01</span><img src="{{ asset('images/Passagem/comida/p1.jpeg') }}" alt="Passagem de Areia 1"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">02</span><img src="{{ asset('images/Passagem/comida/p2.jpeg') }}" alt="Passagem de Areia 2"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">03</span><img src="{{ asset('images/Passagem/comida/p3.jpeg') }}" alt="Passagem de Areia 3"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">04</span><img src="{{ asset('images/Passagem/comida/p4.jpeg') }}" alt="Passagem de Areia 4"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">05</span><img src="{{ asset('images/Passagem/comida/p5.jpeg') }}" alt="Passagem de Areia 5"></div>
            </div>
            <p class="culinaria-galeria-fonte">Fonte: Quilombo Passagem de Areia; Projeto Mapeamento Gastronômico (2025).</p>
        </div>
    </div>
</section>
@endsection
