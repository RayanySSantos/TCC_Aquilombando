<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Comunidades Quilombolas do Alto Sertão Produtivo Baiano</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        {{-- CSS GLOBAL --}}
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <link rel="stylesheet" href="{{ asset('css/historia.css') }}">
        <link rel="stylesheet" href="{{ asset('css/culinaria.css') }}">
        <link rel="stylesheet" href="{{ asset('css/artesanato.css') }}">
        <link rel="stylesheet" href="{{ asset('css/costumes.css') }}">
        <link rel="stylesheet" href="{{ asset('css/agricultura.css') }}">
        <link rel="stylesheet" href="{{ asset('css/estatistica.css') }}">
    </head>

    <body class="
    {{ Request::is('/') ? 'home' : '' }}
    {{ Request::is('sobre') ? 'sobre' : '' }}
    {{ Request::is('historia/*') ? 'historia' : '' }}
    {{ Request::is('culinaria/*') ? 'culinaria' : '' }}
    {{ Request::is('artesanato/*') ? 'artesanato' : '' }}
    {{ Request::is('costumes/*') ? 'costumes' : '' }}
    {{ Request::is('agricultura/*') ? 'agricultura' : '' }}
    {{ Request::is('estatistica/*') ? 'estatistica' : '' }}
    {{ (!Request::is('/') && !Request::is('sobre') && !Request::is('historia/*') && !Request::is('culinaria/*') && !Request::is('artesanato/*') && !Request::is('costumes/*') && !Request::is('agricultura/*') && !Request::is('estatistica/*')) ? 'interno' : '' }}">



    {{-- TOPO / MENU --}}
    <header class="topo">
        <div class="topo-container">
            <div class="logo">
                <!-- Aqui depois você coloca a logo -->
                <a href="/"><img src="{{ asset('images/Logo.png') }}" class="logo-img" alt="Logo Quilombola"></a>
            </div>

            <nav class="menu">

                <div class="menu-item">
                    <span>História</span>
                    <div class="submenu">
                        <a href="/historia/vargem-alta">Vargem Alta</a>
                        <a href="/historia/passagem-de-areia">Passagem de Areia</a>
                        <a href="/historia/vargem-comprida">Vargem Comprida</a>
                        <a href="/historia/quilombo-de-boi">Quilombo de Boi</a>
                        <a href="/historia/lagoa-dos-anjos">Lagoa dos Anjos</a>
                        <a href="/historia/aroeira">Aroeira</a>
                    </div>
                </div>
            
                <div class="menu-item">
                    <span>Culinária</span>
                    <div class="submenu">
                        <a href="/culinaria/vargem-alta">Vargem Alta</a>
                        <a href="/culinaria/passagem-de-areia">Passagem de Areia</a>
                        <a href="/culinaria/vargem-comprida">Vargem Comprida</a>
                        <a href="/culinaria/quilombo-de-boi">Quilombo de Boi</a>
                        <a href="/culinaria/lagoa-dos-anjos">Lagoa dos Anjos</a>
                        <a href="/culinaria/aroeira">Aroeira</a>
                    </div>
                </div>
            
                <div class="menu-item">
                    <span>Artesanato</span>
                    <div class="submenu">
                        <a href="/artesanato/vargem-alta">Vargem Alta</a>
                        <a href="/artesanato/passagem-de-areia">Passagem de Areia</a>
                        <a href="/artesanato/vargem-comprida">Vargem Comprida</a>
                        <a href="/artesanato/quilombo-de-boi">Quilombo de Boi</a>
                        <a href="/artesanato/lagoa-dos-anjos">Lagoa dos Anjos</a>
                        <a href="/artesanato/aroeira">Aroeira</a>
                    </div>
                </div>
            
                <div class="menu-item">
                    <span>Costumes e Tradições</span>
                    <div class="submenu">
                        <a href="/costumes/vargem-alta">Vargem Alta</a>
                        <a href="/costumes/passagem-de-areia">Passagem de Areia</a>
                        <a href="/costumes/vargem-comprida">Vargem Comprida</a>
                        <a href="/costumes/quilombo-de-boi">Quilombo de Boi</a>
                        <a href="/costumes/lagoa-dos-anjos">Lagoa dos Anjos</a>
                        <a href="/costumes/aroeira">Aroeira</a>
                    </div>
                </div>
            
                <div class="menu-item">
                    <span>Agricultura Familiar</span>
                    <div class="submenu">
                        <a href="/agricultura/vargem-alta">Vargem Alta</a>
                        <a href="/agricultura/passagem-de-areia">Passagem de Areia</a>
                        <a href="/agricultura/vargem-comprida">Vargem Comprida</a>
                        <a href="/agricultura/quilombo-de-boi">Quilombo de Boi</a>
                        <a href="/agricultura/lagoa-dos-anjos">Lagoa dos Anjos</a>
                        <a href="/agricultura/aroeira">Aroeira</a>
                    </div>
                </div>
            
                <div class="menu-item">
                    <span>Estatística</span>
                    <div class="submenu">
                        <a href="/estatistica/vargem-alta">Vargem Alta</a>
                        <a href="/estatistica/passagem-de-areia">Passagem de Areia</a>
                        <a href="/estatistica/vargem-comprida">Vargem Comprida</a>
                        <a href="/estatistica/quilombo-de-boi">Quilombo de Boi</a>
                        <a href="/estatistica/lagoa-dos-anjos">Lagoa dos Anjos</a>
                        <a href="/estatistica/aroeira">Aroeira</a>
                    </div>
                </div>
            
                <div class="menu-item">
                    <a href="/sobre">Sobre Nós</a>
                </div>
            
            </nav>
            
        </div>
    </header>

    {{-- CONTEÚDO DAS PÁGINAS --}}
    <main>
        @yield('content')
    </main>

    {{-- Rodapé --}}
    <footer class="rodape">
        <div class="rodape-container">
    
            <!-- LOGO -->
            <div class="rodape-col">
                <a href="/"><img src="{{ asset('images/Logo.png') }}" class="rodape-logo" alt="Logo Quilombola"></a>
                <p class="rodape-descricao">
                    Projeto de valorização e documentação das Comunidades Quilombolas do Alto Sertão Produtivo Baiano.
                </p>
            </div>
    
            <!-- LINKS -->
            <div class="rodape-col">
                <h4>Comunidades</h4>
                <ul>
                    <li><a href="/historia/vargem-alta">Vargem Alta</a></li>
                    <li><a href="/historia/passagem-de-areia">Passagem de Areia</a></li>
                    <li><a href="/historia/vargem-comprida">Vargem Comprida</a></li>
                    <li><a href="/historia/quilombo-de-boi">Quilombo de Boi</a></li>
                    <li><a href="/historia/lagoa-dos-anjos">Lagoa dos Anjos</a></li>
                    <li><a href="/historia/aroeira">Aroeira</a></li>
                </ul>
            </div>
    
            <!-- CONTATO -->
            <div class="rodape-col">
                <h4>Contato</h4>
                <p>E-mail: <a href="mailto:projeto@quilombos.com">projeto@quilombos.com</a></p>
                <p>Instituição: IF Baiano – Campus Guanambi</p>
                <p>Projeto orientado por: [Nome da Professora]</p>
            </div>
    
        </div>
    
        <div class="rodape-final">
            © 2025 Comunidades Quilombolas do Alto Sertão Produtivo Baiano. Todos os direitos reservados.
        </div>
    </footer>
    
     <!-- MODAL / LIGHTBOX (IMAGENS) -->
    <div id="lightbox" class="lightbox">
        <span class="lightbox-fechar">&times;</span>
        <img id="lightbox-img">
    </div>

    {{-- JS (quando a gente precisar) --}}

    <script src="{{ asset('js/mapa.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>

</body>
</html>
