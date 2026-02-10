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

<body>

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
                        <a href="#">Vargem Alta</a>
                        <a href="#">Passagem de Areia</a>
                        <a href="#">Vargem Comprida</a>
                        <a href="#">Quilombo de Boi</a>
                        <a href="#">Lagoa dos Anjos</a>
                        <a href="#">Aroeira</a>
                    </div>
                </div>

                <div class="menu-item">
                    <span>Culinária</span>
                    <div class="submenu">
                        <a href="#">Vargem Alta</a>
                        <a href="#">Passagem de Areia</a>
                        <a href="#">Vargem Comprida</a>
                        <a href="#">Quilombo de Boi</a>
                        <a href="#">Lagoa dos Anjos</a>
                        <a href="#">Aroeira</a>
                    </div>
                </div>

                <div class="menu-item">
                    <span>Artesanato</span>
                    <div class="submenu">
                        <a href="#">Vargem Alta</a>
                        <a href="#">Passagem de Areia</a>
                        <a href="#">Vargem Comprida</a>
                        <a href="#">Quilombo de Boi</a>
                        <a href="#">Lagoa dos Anjos</a>
                        <a href="#">Aroeira</a>
                    </div>
                </div>

                <div class="menu-item">
                    <span>Costumes e Tradições</span>
                    <div class="submenu">
                        <a href="#">Vargem Alta</a>
                        <a href="#">Passagem de Areia</a>
                        <a href="#">Vargem Comprida</a>
                        <a href="#">Quilombo de Boi</a>
                        <a href="#">Lagoa dos Anjos</a>
                        <a href="#">Aroeira</a>
                    </div>
                </div>

                <div class="menu-item">
                    <span>Agricultura Familiar</span>
                    <div class="submenu">
                        <a href="#">Vargem Alta</a>
                        <a href="#">Passagem de Areia</a>
                        <a href="#">Vargem Comprida</a>
                        <a href="#">Quilombo de Boi</a>
                        <a href="#">Lagoa dos Anjos</a>
                        <a href="#">Aroeira</a>
                    </div>
                </div>

                <div class="menu-item">
                    <a href="#">Estatística</a>
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
