@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.80), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Vargem Comprida/comida/p7.jpeg') }}');">
    <div class="secao-capa-conteudo">
        <h1>Vargem Comprida: Tradições na Cozinha Quilombola</h1>
        <span>Culinária</span>
    </div>
</section>

<section class="culinaria-hero">
    <div class="culinaria-hero-container culinaria-hero-container--top">
        <div class="culinaria-hero-texto">

            <p>A culinária da Comunidade Quilombola de Vargem Comprida representa um reflexo direto da agricultura familiar e da ancestralidade que sustenta o modo de vida local. Os alimentos cultivados no próprio território, como feijão, milho, mandioca, batata-doce, maxixe, frutas e hortaliças, são transformados em preparações carregadas de significado e história, garantindo sabor, frescor e conexão com a terra. Esses alimentos expressam saberes acumulados ao longo das gerações e reafirmam a identidade cultural da comunidade.</p>

            <p>Entre os pratos mais tradicionais destacam-se a galinhada (01), a farofa doce (02), o escaldado (03), o requeijão (04), a paçoca de gergelim (05) e o liordino (06), além de outras preparações típicas da comunidade. Cada receita carrega a memória coletiva e os saberes transmitidos pelos antepassados, preservando modos de preparo que atravessam o tempo.</p>

            <p>A galinhada é preparada com o frango caipira cozido separadamente com temperos tradicionais e posteriormente incorporado ao arroz já refogado. O prato é finalizado com milho e cheiro-verde, resultando em uma refeição farta e muito presente em encontros familiares e celebrações comunitárias, simbolizando união e partilha.</p>

            <p>A farofa doce surge do aproveitamento do soro e dos resíduos do preparo do requeijão, misturados ao açúcar e à farinha até atingir a textura característica. Consumida junto ao requeijão, representa criatividade no uso dos alimentos e preservação de práticas tradicionais da cozinha quilombola.</p>

            <p>O escaldado também é preparado a partir do soro do requeijão, misturado com açúcar, sal e farinha até adquirir consistência semelhante a um pirão. Servido como acompanhamento, reforça a tradição de reaproveitamento e o valor dado aos alimentos produzidos na própria comunidade.</p>

            <p>O requeijão é produzido de forma artesanal, a partir do leite coalhado naturalmente, que passa por processos de aquecimento, escorrimento do soro e amassamento até atingir o ponto ideal. Seu preparo exige tempo e dedicação, sendo um dos alimentos mais representativos da identidade culinária de Vargem Comprida.</p>

            <p>A paçoca de gergelim é feita com as sementes levemente tostadas e posteriormente misturadas com açúcar, sal e farinha, sendo então piladas até liberar o óleo natural e atingir o ponto adequado. O uso do pilão reforça a ancestralidade e a continuidade dos saberes tradicionais.</p>

            <p>O liordino é preparado com água fervida com açúcar, à qual se acrescenta o flocão e manteiga, mexendo até desprender da panela. Depois de moldado e resfriado, transforma-se em um doce tradicional, presente em momentos de convivência familiar e celebração.</p>

            <p>O preparo dos alimentos ocorre, muitas vezes, de forma coletiva, reunindo famílias em momentos de troca, aprendizado e celebração. Durante essas atividades, as tradições culinárias são ensinadas aos mais jovens, fortalecendo os laços comunitários e garantindo a continuidade cultural. Mais do que sustento, a culinária de Vargem Comprida representa resistência, orgulho e pertencimento, mantendo viva a memória dos antepassados e assegurando a transmissão dos saberes para as futuras gerações.</p>

        </div>

        <div class="culinaria-midia">
            <div class="culinaria-hero-galeria culinaria-hero-galeria--vertical">
                <div class="culinaria-foto"><span class="culinaria-foto-numero">01</span><img src="{{ asset('images/Vargem Comprida/comida/p7.jpeg') }}" alt="Vargem Comprida 1"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">02</span><img src="{{ asset('images/Vargem Comprida/comida/p2.jpeg') }}" alt="Vargem Comprida 2"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">03</span><img src="{{ asset('images/Vargem Comprida/comida/p3.jpeg') }}" alt="Vargem Comprida 3"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">04</span><img src="{{ asset('images/Vargem Comprida/comida/p8.jpeg') }}" alt="Vargem Comprida 4"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">05</span><img src="{{ asset('images/Vargem Comprida/comida/p5.jpeg') }}" alt="Vargem Comprida 5"></div>
                <div class="culinaria-foto"><span class="culinaria-foto-numero">06</span><img src="{{ asset('images/Vargem Comprida/comida/p6.jpeg') }}" alt="Vargem Comprida 6"></div>
            </div>
            <p class="culinaria-galeria-fonte">Fonte: Quilombo Vargem Comprida; Projeto Mapeamento Gastronômico (2025).</p>
        </div>
    </div>
</section>
@endsection
