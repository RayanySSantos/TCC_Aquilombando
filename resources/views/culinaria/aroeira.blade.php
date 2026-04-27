@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.80), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Aroeira/comida/puba.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Aroeira: Cozinha de Raiz e Celebração</h1>
        <span>Culinária</span>
    </div>
</section>

<section class="culinaria-hero">
    <div class="culinaria-hero-container culinaria-hero-container--top">
        <div class="culinaria-hero-texto">

            <p>A culinária da Comunidade Quilombola de Aroeira expressa diretamente a agricultura familiar desenvolvida no território, utilizando ingredientes frescos e variados produzidos localmente. Esses alimentos dão origem a preparações que carregam histórias, tradições e saberes construídos ao longo do tempo, evidenciando a profunda relação entre a terra, a alimentação e a identidade cultural da comunidade.</p>

            <p>Entre os pratos mais valorizados estão o frango caipira (01), o pirão de frango (02), o bolo de puba (03), o frango cheio (04), o caldo de frango (05) e o bolo de aipim (06). Todas essas receitas são transmitidas de geração em geração e representam um elo entre o passado e o presente, preservando modos de preparo, sabores e significados que fazem parte da memória coletiva do quilombo.</p>

            <p>O frango caipira é preparado com temperos tradicionais e cozido lentamente na panela de pressão até ficar macio e bem incorporado aos sabores dos pimentões, alho e especiarias. Presente em reuniões familiares e celebrações, é símbolo de fartura e acolhimento na comunidade.</p>

            <p>O pirão de frango é feito a partir do caldo do cozimento da galinha, ao qual se adiciona a farinha de mandioca aos poucos, mexendo até atingir textura cremosa. Servido junto ao frango, representa tradição e aproveitamento integral dos alimentos produzidos no território.</p>

            <p>O bolo de puba é preparado com a massa de mandioca fermentada, misturada aos demais ingredientes e assada até ficar dourada e macia. Seu preparo envolve tempo e cuidado, sendo uma receita que remete às práticas antigas e à valorização da mandioca como base alimentar da comunidade.</p>

            <p>O frango cheio é recheado com os miúdos temperados e cuidadosamente costurado antes do cozimento, garantindo sabor e boa apresentação. Muito presente em ocasiões especiais, esse prato simboliza celebração e dedicação no preparo.</p>

            <p>O caldo de frango é feito com mandioca cozida e frango desfiado, formando um creme encorpado e nutritivo. Consumido em diferentes momentos, representa sustento e conforto, reforçando a importância da mandioca e da criação de aves na agricultura familiar.</p>

            <p>O bolo de aipim é preparado com a mandioca batida e misturada aos demais ingredientes antes de ir ao forno. Com textura macia e sabor marcante, é presença constante em encontros familiares, simbolizando tradição e continuidade dos saberes culinários.</p>

            <p>A preparação dos alimentos ocorre, em muitos momentos, de forma coletiva, especialmente em encontros familiares e celebrações comunitárias. Cozinhar, em Aroeira, é um ato de partilha, aprendizado e preservação cultural, fortalecendo os laços entre os moradores. Mais do que alimento, a culinária simboliza resistência e afirmação identitária, reafirmando o orgulho, a história e a continuidade dos valores ancestrais da comunidade.</p>

        </div>

        <div class="culinaria-midia">
            <div class="culinaria-hero-galeria culinaria-hero-galeria--vertical">
                <div class="culinaria-foto"><span class="culinaria-foto-numero">01</span><img src="{{ asset('images/Aroeira/comida/p1.JPG') }}" alt="Aroeira 1"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">02</span><img src="{{ asset('images/Aroeira/comida/r.jpg') }}" alt="Aroeira 2"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">03</span><img src="{{ asset('images/Aroeira/comida/p8.jpg') }}" alt="Aroeira 3"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">04</span><img src="{{ asset('images/Aroeira/comida/p4.JPG') }}" alt="Aroeira 4"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">05</span><img src="{{ asset('images/Aroeira/comida/p9.png') }}" alt="Aroeira 5"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">06</span><img src="{{ asset('images/Aroeira/comida/p6.jpg') }}" alt="Aroeira 6"></div>
            </div>
                <p class="culinaria-galeria-fonte">Fonte: Quilombo Aroeira; Projetos Mapeamento Gastronômico; Culinária Ancestral; e Comunidades Rurais e Tradicionais (2025).</p>
        </div>
    </div>
</section>
@endsection
