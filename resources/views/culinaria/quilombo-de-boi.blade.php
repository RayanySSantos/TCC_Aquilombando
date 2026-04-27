@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.80), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Boi/comida/bolo.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Quilombo Boi: Receitas que Mantêm a Resistência</h1>
        <span>Culinária</span>
    </div>
</section>

<section class="culinaria-hero">
    <div class="culinaria-hero-container">
        <div class="culinaria-hero-texto">

            <p>A culinária da Comunidade Quilombola Boi expressa diretamente a agricultura familiar e a forte presença da ancestralidade no cotidiano dos moradores. Os alimentos cultivados nos roçados da própria comunidade formam a base das receitas tradicionais, garantindo uma alimentação saudável e profundamente ligada ao território. Esses saberes culinários, construídos ao longo do tempo, atravessam gerações e fortalecem a identidade cultural, evidenciando a relação entre alimento, memória e pertencimento.</p>

            <p>Entre os pratos mais representativos destacam-se o bolo de milho (01), o doce de umbu (02), a feijoada (03) e o cortado de palma (04), preparações que carregam histórias, afetos e significados culturais profundos. As receitas são transmitidas, principalmente, pela oralidade, pelas mulheres mais velhas da comunidade, que ensinam não apenas os ingredientes e os modos de preparo, mas também os tempos, os rituais e os sentidos que envolvem cada prato. Dessa forma, os sabores preservam a história e a resistência do povo quilombola.</p>

            <p>O bolo de milho é preparado a partir do milho fresco ralado ou batido, misturado aos demais ingredientes e levado ao forno até adquirir textura macia e sabor marcante. Presente em cafés comunitários e momentos de partilha, ele simboliza acolhimento e a valorização do milho como alimento tradicional da comunidade.</p>

            <p>O doce de umbu é feito com a polpa da fruta cozida e misturada ao açúcar até atingir o ponto ideal. O processo envolve cuidado no preparo do fruto e atenção constante durante o cozimento. Muito apreciado pela comunidade, o doce representa o aproveitamento dos frutos do território e a conexão com o bioma do semiárido.</p>

            <p>A feijoada é preparada com o feijão previamente cozido e diferentes tipos de carnes, que são incorporadas e deixadas no fogo até atingir maciez e sabor intenso. Servida em ocasiões especiais e encontros familiares, a feijoada simboliza fartura, união e celebração coletiva.</p>

            <p>O cortado de palma é feito a partir da retirada dos espinhos, corte e fervura da palma, seguida do refogado com toucinho e temperos tradicionais. Muito presente no cotidiano, esse prato evidencia a adaptação ao clima semiárido e a valorização dos recursos disponíveis na própria terra, podendo ser servido com farinha de mandioca, conforme a preferência.</p>

            <p>A preparação dos alimentos ocorre, em grande parte, de maneira coletiva, especialmente em encontros familiares, festas e celebrações comunitárias. Nesses momentos, a cozinha se transforma em espaço de aprendizado, convivência e transmissão de valores como cooperação, respeito e solidariedade. Mais do que uma prática voltada à nutrição, a culinária de Boi representa um símbolo de resistência cultural e afirmação identitária, mantendo viva a memória dos antepassados e garantindo a continuidade dos saberes alimentares para as futuras gerações.</p>

        </div>

        <div class="culinaria-midia">
            <div class="culinaria-hero-galeria culinaria-hero-galeria--vertical">
                <div class="culinaria-foto"><span class="culinaria-foto-numero">01</span><img src="{{ asset('images/Boi/comida/p1.jpeg') }}" alt="Quilombo Boi 1"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">02</span><img src="{{ asset('images/Boi/comida/p2.jpeg') }}" alt="Quilombo Boi 2"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">03</span><img src="{{ asset('images/Boi/comida/p3.jpeg') }}" alt="Quilombo Boi 3"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">04</span><img src="{{ asset('images/Boi/comida/p4.jpeg') }}" alt="Quilombo Boi 4"></div>
            </div>
            <p class="culinaria-galeria-fonte">Fonte: Quilombo Boi; Projeto Mapeamento Gastronômico (2025).</p>
        </div>
    </div>
</section>
@endsection
