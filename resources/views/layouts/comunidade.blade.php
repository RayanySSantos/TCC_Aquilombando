<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- CSS geral --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    {{-- CSS exclusivo das comunidades --}}
    <link rel="stylesheet" href="{{ asset('css/comunidade.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body data-fonte-quilombo="@yield('fonte-quilombo')">

    {{-- HEADER IGUAL AO DA HOME, SOMENTE TROCA A COR NO CSS --}}
    <header class="topo topo-interno">
        <div class="topo-container">

            <div class="logo">
                <a href="/"><img src="{{ asset('images/Logo.png') }}" class="logo-img" alt="Logo"></a>
            </div>

            <nav class="menu">
                <div class="menu-item">
                    <span>História</span>
                    <div class="submenu">
                        <a href="/historia/vargem-alta">Vargem Alta</a>
                        <a href="/historia/passagem-de-areia">Passagem de Areia</a>
                        <a href="/historia/vargem-comprida">Vargem Comprida</a>
                        <a href="/historia/quilombo-de-boi">Quilombo Boi</a>
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
                        <a href="/culinaria/quilombo-de-boi">Quilombo Boi</a>
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
                        <a href="/artesanato/quilombo-de-boi">Quilombo Boi</a>
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
                        <a href="/costumes/quilombo-de-boi">Quilombo Boi</a>
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
                        <a href="/agricultura/quilombo-de-boi">Quilombo Boi</a>
                        <a href="/agricultura/lagoa-dos-anjos">Lagoa dos Anjos</a>
                        <a href="/agricultura/aroeira">Aroeira</a>
                    </div>
                </div>

                <div class="menu-item">
                    <span>Perfil social</span>
                    <div class="submenu">
                        <a href="/estatistica/vargem-alta">Vargem Alta</a>
                        <a href="/estatistica/passagem-de-areia">Passagem de Areia</a>
                        <a href="/estatistica/vargem-comprida">Vargem Comprida</a>
                        <a href="/estatistica/quilombo-de-boi">Quilombo Boi</a>
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

    {{-- TÍTULO DA PÁGINA / NOME DA COMUNIDADE --}}
    <h1 class="titulo-comunidade">@yield('nome-comunidade')</h1>

    {{-- CONTEÚDO --}}
    <main>
        @yield('conteudo')
    </main>

    {{-- RODAPÉ --}}
    @include('layouts.footer')


    {{-- JS das comunidades --}}
    <script src="{{ asset('js/comunidade.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
