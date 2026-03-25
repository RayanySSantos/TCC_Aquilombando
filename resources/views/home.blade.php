@extends('layouts.app')

@section('content')

<section class="hero">
    <div class="hero-container">
        <h1 class="hero-titulo">Comunidades Quilombolas do Sertão Produtivo</h1>
        <div class="hero-texto">
            <p>
            As comunidades quilombolas constituem territórios históricos de resistência, organização coletiva e preservação de saberes ancestrais. Formadas a partir da luta de africanos escravizados e seus descendentes contra o sistema escravista, essas comunidades consolidaram-se como espaços de autonomia cultural, nos quais memória, identidade e território se articulam de forma contínua. Assim, o quilombo não se limita a uma herança do passado, mas configura-se como uma realidade viva, marcada pela permanência e pela ressignificação de práticas culturais ao longo do tempo. O território quilombola assume papel central na construção dessas identidades, pois é nele que se fortalecem os vínculos comunitários, preservam-se as memórias coletivas e se organizam as práticas cotidianas.
            </p>

            <p>
            No Alto Sertão Produtivo, as comunidades quilombolas mantêm vivas essas tradições por meio da culinária, do artesanato, dos festejos, dos costumes e das práticas agrícolas. A alimentação tradicional destaca-se como uma importante expressão cultural, pois carrega memórias, afetos e saberes transmitidos pela oralidade. É a partir desse contexto que se insere este website, cujo objetivo é valorizar e dar visibilidade às comunidades quilombolas do Sertão Produtivo Baiano, utilizando a tecnologia como ferramenta de registro, preservação e disseminação de seus saberes e histórias. Nesta apresentação, estão reunidas as comunidades de Aroeira (01), Boi (02), Lagoa dos Anjos (03), Passagem de Areia (04), Vargem Alta (05) e Vargem Comprida (06), também identificadas nas imagens ao lado.
            </p>
        </div>

        <div class="hero-midia">
            <div class="hero-galeria">
                <div class="foto">
                    <span class="foto-numero">01</span>
                    <img src="{{ asset('images/comunidade/foto1.jpg') }}" alt="Comunidade 01 - Aroeira">
                </div>
                <div class="foto">
                    <span class="foto-numero">02</span>
                    <img src="{{ asset('images/comunidade/foto2.jpg') }}" alt="Comunidade 02 - Boi">
                </div>
                <div class="foto">
                    <span class="foto-numero">03</span>
                    <img src="{{ asset('images/comunidade/foto3.jpg') }}" alt="Comunidade 03 - Lagoa dos Anjos">
                </div>
                <div class="foto">
                    <span class="foto-numero">04</span>
                    <img src="{{ asset('images/comunidade/foto4.jpg') }}" alt="Comunidade 04 - Passagem de Areia">
                </div>
                <div class="foto">
                    <span class="foto-numero">05</span>
                    <img src="{{ asset('images/comunidade/foto5.jpg') }}" alt="Comunidade 05 - Vargem Alta">
                </div>
                <div class="foto">
                    <span class="foto-numero">06</span>
                    <img src="{{ asset('images/comunidade/foto6.jpg') }}" alt="Comunidade 06 - Vargem Comprida">
                </div>
            </div>

            <p class="hero-galeria-fonte">Fonte: Projetos Mapeamento Gastronômico; Culinária Ancestral; e Comunidades Rurais e Tradicionais (2025).</p>
        </div>
    </div>
</section>

<!-- ==================== NOSSAS COMUNIDADES ==================== -->

<section class="comunidades-section">
    <h2 class="comunidades-titulo">Nossas Comunidades Quilombolas</h2>

    <div class="comunidades-grid">

        <div class="card">
            <img src="{{ asset('images/Logo/Aroeira.jpeg') }}" alt="Aroeira">
            <div class="card-info">
                <h3>Quilombo Aroeira</h3>
                <p>Tradições, cultura e história preservadas ao longo de gerações.</p>
                <a href="{{ url('/historia/aroeira') }}" class="card-link">Conhecer mais →</a>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images/Logo/LagoadosAnjos.png') }}" alt="Lagoa dos Anjos">
            <div class="card-info">
                <h3>Quilombo Lagoa dos Anjos</h3>
                <p>Uma comunidade que mantém viva sua história e ancestralidade quilombola.</p>
                <a href="{{ url('/historia/lagoa-dos-anjos') }}" class="card-link">Conhecer mais →</a>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images/Logo/Areia.png') }}" alt="Passagem de Areia">
            <div class="card-info">
                <h3>Quilombo Passagem de Areia</h3>
                <p>Uma comunidade marcada por suas práticas, saberes e tradições ancestrais.</p>
                <a href="{{ url('/historia/passagem-de-areia') }}" class="card-link">Conhecer mais →</a>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images/Logo/Boi.jpeg') }}" alt="Quilombo de Boi">
            <div class="card-info">
                <h3>Quilombo de Boi</h3>
                <p>Uma comunidade marcada por práticas culturais que atravessam gerações.</p>
                <a href="{{ url('/historia/quilombo-de-boi') }}" class="card-link">Conhecer mais →</a>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images/Logo/vargemalta.png') }}" alt="Vargem Alta">
            <div class="card-info">
                <h3>Quilombo Vargem Alta</h3>
                <p>Uma comunidade rica em tradições, cultura e história que preserva a identidade quilombola.</p>
                <a href="{{ url('/historia/vargem-alta') }}" class="card-link">Conhecer mais →</a>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images/Logo/Comprida.png') }}" alt="Vargem Comprida">
            <div class="card-info">
                <h3>Quilombo Vargem Comprida</h3>
                <p>Cultura viva, costumes e uma comunidade que mantém sua ancestralidade.</p>
                <a href="{{ url('/historia/vargem-comprida') }}" class="card-link">Conhecer mais →</a>
            </div>
        </div>

    </div>
</section>
<!-- ==================== MAPA DO TERRITÓRIO ==================== -->
<section class="mapa-section">
    <div class="mapa-cabecalho">
        <h2 class="mapa-titulo">Território do Alto Sertão Produtivo</h2>
        <p class="mapa-subtitulo">Comunidades quilombolas</p>
    </div>

    <div class="mapa-container">
        <img src="{{ asset('images/mapa-sertao.png') }}" class="mapa-img" alt="Mapa do Território">

        <!-- HOTSPOTS CLICÁVEIS SOBRE O NOME DAS CIDADES -->
        <div class="cidade-hotspot caetite" data-local="Caetité"></div>
        <div class="cidade-hotspot palmas" data-local="Palmas de Monte Alto"></div>
        <div class="cidade-hotspot pindai" data-local="Pindaí"></div>
        <div class="cidade-hotspot candiba" data-local="Candiba"></div>

        <!-- CARD QUE APARECE AO CLICAR -->
        <div id="cardComunidade" class="card-comunidade">
            <span class="card-fechar">&times;</span>
            <h3 id="cardTitulo"></h3>
            <div id="cardLista"></div>
        </div>
    </div>
    <p class="fonte-mapa">
        Fonte: 
        <a href="https://www.ba.gov.br/cultura/sites/site-secult/files/migracao_2024/arquivos/File/01_divisao_territorial_2/13_sertao_produtivo.pdf"
           target="_blank" 
           rel="noopener noreferrer">
            Secretaria da Cultura
        </a>
    </p>        

    <!-------------------- LEGENDA DO MAPA ----------------------------->
<div class="mapa-legenda">
    <h4>Cidades Clicáveis</h4>

    <div class="legenda-item">
        <span class="legenda-ponto verde"></span>
        <span>Palmas de Monte Alto</span>
    </div>
    <div class="legenda-item">
        <span class="legenda-ponto vermelho"></span>
        <span>Caetité</span>
    </div>
    <div class="legenda-item">
        <span class="legenda-ponto amarelo"></span>
        <span>Candiba</span>
    </div>
    <div class="legenda-item">
        <span class="legenda-ponto marrom"></span>
        <span>Pindaí</span>
    </div>

    <p class="legenda-info">
        Cidades clicáveis no Mapa.
    </p>
</div>

</section>

<!-- ==================== LIGHTBOX ==================== -->
<div id="lightbox" class="lightbox">
    <span class="lightbox-fechar">&times;</span>
    <img id="lightbox-img" src="">
</div>


@endsection
