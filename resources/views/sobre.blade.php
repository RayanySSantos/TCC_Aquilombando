@extends('layouts.app')

@section('content')

{{-- ================= SOBRE O PROJETO ================= --}}
<div class="bloco-fundo fundo-branco">
    <section class="secao sobre-intro">
        <h1 class="titulo-pagina">Sobre Nós</h1>
        <p>
        Este projeto nasceu do desejo de documentar, preservar e divulgar a rica herança cultural das comunidades quilombolas do Sertão Produtivo. Por meio de uma pesquisa participativa, da documentação audiovisual e do trabalho colaborativo com os moradores das comunidades, buscou-se construir um registro abrangente dos saberes e fazeres culinários tradicionais. Esse material tem como finalidade preservar a memória coletiva e atuar como instrumento educativo, possibilitando a transmissão desses conhecimentos às novas gerações e ampliando a visibilidade da cultura quilombola.
        </p>

        <p>
        Este website foi desenvolvido como Trabalho de Conclusão de Curso (TCC) no curso de Análise e Desenvolvimento de Sistemas do Instituto Federal Baiano – Campus Guanambi, possuindo caráter acadêmico, educacional e cultural. O website foi desenvolvido por Rayany Silva Santos, sob a orientação da Profª Drª Daniele de Brito Trindade e a coorientação do Me. George Gabriel Mendes Dourado. A plataforma digital foi criada como ferramenta de organização, divulgação e acesso às informações coletadas durante a pesquisa, reunindo conteúdos sobre história, culinária, agricultura familiar, artesanato e tradições das comunidades participantes.
        </p>

        <p>
        O projeto não possui finalidade comercial, sendo orientado por princípios éticos de respeito, protagonismo comunitário e valorização dos saberes ancestrais. Seu objetivo central é fortalecer a identidade quilombola, promover o reconhecimento social dessas comunidades e contribuir para a preservação de sua memória histórica por meio da tecnologia.
        </p>

        <a class="chamada-projetos" href="/projetos">
            <div class="chamada-projetos-texto">
                <span class="chamada-projetos-tag">Grupo de pesquisa e projetos</span>
                <h2>Conheça mais nosso grupo de pesquisa e projetos</h2>
                <p>Acesse uma página dedicada para apresentar as iniciativas desenvolvidas, os objetivos do grupo e os materiais produzidos.</p>
            </div>
            <span class="chamada-projetos-botao">Explorar projetos</span>
        </a>

    </section>
</div>

{{-- ================= NOSSA EQUIPE ================= --}}
<div class="bloco-fundo fundo-branco">
    <section class="secao">
        <h2 class="subtitulo">Nossa Equipe</h2>

        <div class="cards-equipe">

            <div class="card-equipe">
                <div class="avatar">
                    <img src="/images/Equipe/Rayany.jpeg" alt="Maria Silva">
                </div>
                <h3>Rayany Silva Santos</h3>
                <span>Desenvolvedora</span>
                <p>Discente do curso de Tecnologia em Análise e Desenvolvimento de Sistemas – Campus Guanambi. Membro discente do Grupo de Pesquisa HAFROQI – História, Memória e Identidade Afro-Brasileira, Quilombola e Indígena do Sertão Produtivo. É grata pela oportunidade de contribuir com a valorização e o registro das histórias das comunidades quilombolas, fortalecendo o compromisso com a memória, a resistência e a identidade cultural do Sertão Produtivo.</p>
            </div>

             <div class="card-equipe">
                <div class="avatar">
                    <img src="/images/Equipe/dani.jpeg" alt="Ana Oliveira">
                </div>
                <h3>Dra. Daniele de Brito Trindade</h3>
                <span>Orientadora</span>
                <p>Professora EBTT do Instituto Federal Baiano (IF Baiano) – Campus Guanambi, atua também como colaboradora no Mestrado Profissional em Produção Vegetal no Semiárido. É coordenadora substituta do curso de Licenciatura em Ciências Biológicas (Portaria 597/2024) e líder do grupo de pesquisa HAFROQI, voltado à história, memória e identidade afro-brasileira, quilombola e indígena no Sertão Produtivo. Coordena ainda o curso de extensão “Ciência e Ancestralidade”, com foco em agroecologia e saberes tradicionais sobre plantas medicinais. Foi membro do GPQUIF (2020–2025) e integrante da gestão do NEABI (2023–2024). Possui doutorado (2018) e mestrado (2014) em Estatística pela UFPE, além de graduação em Estatística pela UFBA (2011).</p>            </div>

            <div class="card-equipe">
                <div class="avatar">
                    <img src="/images/Equipe/Geo.jpeg" alt="João Santos">
                </div>
                <h3>Me. George Gabriel Mendes Dourado</h3>
                <span>Coorientador</span>
                <p>Professor EBTT do Instituto Federal de Educação, Ciência e Tecnologia Baiano (IF Baiano) – Campus Guanambi. É membro do Grupo de Pesquisa HAFROQI – História, Memória e Identidade Afro-Brasileira, Quilombola e Indígena do Sertão Produtivo, onde desenvolve projetos voltados à valorização histórica e cultural, além de atuar no CETEIA. Participa também de projetos tecnológicos em parceria com o SAMU junto ao IF Baiano. Possui mestrado em Ciências da Computação e Matemática Computacional pelo Instituto de Ciências Matemáticas e de Computação da Universidade de São Paulo (ICMC/USP), concluído em 2015, e graduação em Bacharelado em Ciência da Computação pela Universidade Estadual do Sudoeste da Bahia (UESB), concluída em 2012.</p>
            </div>

        </div>
    </section>
</div>


{{-- ================= VOLUNTÁRIOS ================= --}}
<div class="bloco-fundo fundo-branco">
    <section class="secao">

        <h2 class="subtitulo">Nossos Voluntários</h2>

        {{-- ================= DISCENTES ================= --}}
        <h3 class="categoria">Discentes</h3>
        <div class="linha-circulos amarelo">

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/Dan.jpeg" alt="Daniela da Silva Aires">
                </div>
                <span class="pessoa-nome">Daniela da Silva Aires</span>
                <span class="pessoa-cargo">Tecnóloga em Agroindústria</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/joao.jpeg" alt="João Vitor Lima Castro Teixeira">
                </div>
                <span class="pessoa-nome">João Vitor L. Castro Teixeira</span>
                <span class="pessoa-cargo">Tecnólogo em Análise e Desenvolvimento de Sistemas</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/v1.jpeg" alt="João Vitor dos Santos Ramos">
                </div>
                <span class="pessoa-nome">João Vitor dos Santos Ramos</span>
                <span class="pessoa-cargo">Cursando Licenciatura em Ciências Biológicas</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/Luis.jpeg" alt="Luis Gustavo Cartoso da Silva">
                </div>
                <span class="pessoa-nome">Luis Gustavo Cartoso da Silva</span>
                <span class="pessoa-cargo">Cursando Análise e Desenvolvimento de Sistemas</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/tais.jpeg" alt="Tais Carolane Souza Almeida">
                </div>
                <span class="pessoa-nome">Tais Carolane Souza Almeida</span>
                <span class="pessoa-cargo">Cursando Bacharelado em Engenharia Agronômica</span>
            </div>


        </div>

        {{-- ================= COLABORADORES EXTERNOS ================= --}}
        <h3 class="categoria">Colaboradores Externos do CESOL (Centro Público de Economia Solidária)</h3>
        <div class="linha-circulos vermelho">

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/bianca.jpeg" alt="Bianca de Carvalho Silva">
                </div>
                <span class="pessoa-nome">Bianca de Carvalho Silva</span>
                <span class="pessoa-cargo">Agente socioprodutiva</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/flavia.jpeg" alt="Flávia Eugínia Pereira Gomes">
                </div>
                <span class="pessoa-nome">Flávia Eugínia Pereira Gomes</span>
                <span class="pessoa-cargo">Auxiliar administrativo</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/ieda.jpeg" alt="Iêda da Silva Guimarães Soares">
                </div>
                <span class="pessoa-nome">Iêda da Silva Guimarães Soares</span>
                <span class="pessoa-cargo">Agente socioprodutiva</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/ivone.jpeg" alt="Ivone Donato Neves">
                </div>
                <span class="pessoa-nome">Ivone Donato Neves</span>
                <span class="pessoa-cargo">Agente socioprodutiva</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/leile.jpeg" alt="Leiliane Azevêdo Aranha">
                </div>
                <span class="pessoa-nome">Leiliane Azevêdo Aranha</span>
                <span class="pessoa-cargo">Ex-coordenadora do CESOL e secretária de Cultura, Esporte, Lazer e Turismo do município de Urandi-BA</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/linda.jpeg" alt="Lindaberg da Rocha Macedo">
                </div>
                <span class="pessoa-nome">Lindaberg da Rocha Macedo</span>
                <span class="pessoa-cargo">Agente socioprodutiva</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/lucelia.jpeg" alt="Lucélia Amorim da Silva">
                </div>
                <span class="pessoa-nome">Lucélia Amorim da Silva</span>
                <span class="pessoa-cargo">Agente de comercialização</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/ramon.jpeg" alt="Ramon Lima Silva">
                </div>
                <span class="pessoa-nome">Ramon Lima Silva</span>
                <span class="pessoa-cargo">Coordenador</span>
            </div>
        </div>

                {{-- ================= DISCENTES ================= --}}
        <h3 class="categoria">Líderes das comunidades quilombolas</h3>
        <div class="linha-circulos amarelo">

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/edmilson.jpeg" alt="Edmilson Moreira Santos">
                </div>
                <span class="pessoa-nome">Edmilson Moreira Santos</span>
                <span class="pessoa-cargo">Líder do Quilombo de Boi</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/jorge.jpeg" alt="Jorge Auto dos Santos">
                </div>
                <span class="pessoa-nome">Jorge Auto dos Santos</span>
                <span class="pessoa-cargo">Líder do Quilombo Lagoa dos Anjos</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/leo.jpeg" alt="Leonardo de Oliveira Brito">
                </div>
                <span class="pessoa-nome">Leonardo de Oliveira Brito</span>
                <span class="pessoa-cargo">Líder do Quilombo Vargem Comprida</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/nelci.jpeg" alt="Nelci Conceição dos Santos">
                </div>
                <span class="pessoa-nome">Nelci Conceição dos Santos</span>
                <span class="pessoa-cargo">Líder do Quilombo Aroeira</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/rosangela.jpeg" alt="Rosângela Maria da Silva">
                </div>
                <span class="pessoa-nome">Rosângela Maria da Silva</span>
                <span class="pessoa-cargo">Líder do Quilombo Passagem de Areia</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/sidalia.jpeg" alt="Sidália Montalvão de Brito">
                </div>
                <span class="pessoa-nome">Sidália Montalvão de Brito</span>
                <span class="pessoa-cargo">Líder do Quilombo Vargem Alta</span>
            </div>


        </div>

    </section>
</div>



{{-- ================= METODOLOGIA ================= --}}
<div class="bloco-metodologia">
    <section class="secao metodologia">

        <h2>Metodologia do Projeto</h2>

        <div class="grid-metodologia metodologia-listas">
            <div class="metodologia-lista-card">
                <h4>Nossa Abordagem</h4>
                <ul>
                    <li>Pesquisa participativa envolvendo moradores</li>
                    <li>Documentação audiovisual</li>
                    <li>Entrevistas com guardiões da memória</li>
                    <li>Registro do patrimônio material e imaterial</li>
                    <li>Catalogação de saberes tradicionais</li>
                </ul>
            </div>

            <div class="metodologia-lista-card">
                <h4>Princípios Éticos</h4>
                <ul>
                    <li>Respeito ao protagonismo comunitário</li>
                    <li>Consentimento informado</li>
                    <li>Reconhecimento dos saberes tradicionais</li>
                    <li>Devolução dos resultados às comunidades</li>
                    <li>A pesquisa é financiada pela FAPESB (Edital 52/2024 – PIBIC) e foi aprovada pelo Comitê de Ética em Pesquisa (Parecer nº 7.352.907)</li>
                </ul>
            </div>
        </div>

        <h2 class="trabalhos-titulo">Trabalhos desenvolvidos por meio do projeto Mapeamento Gastronômico</h2>

        <div class="trabalhos-grid">
            <div class="trabalho-card">
                <h4>E-book</h4>
                <a class="trabalho-link" href="https://heyzine.com/flip-book/afd84a7385.html" target="_blank" rel="noopener noreferrer">
                    Acessar publicação
                </a>
                <div class="trabalho-galeria">
                    <img src="/images/Ebook01/capa.png" alt="Capa do E-book do projeto">
                    <img src="/images/Ebook01/02.png" alt="Página interna do E-book do projeto">
                    <img src="/images/Ebook01/03.png" alt="Página interna do E-book do projeto">
                </div>
            </div>

            <div class="trabalho-card">
                <h4>Cartilha Passagem de Areia</h4>
                <a class="trabalho-link" href="https://heyzine.com/flip-book/c653c7e7e6.html" target="_blank" rel="noopener noreferrer">
                    Acessar cartilha
                </a>
                <div class="trabalho-galeria">
                    <img src="/images/ebook-passagem/cartilha passagem.png" alt="Capa do E-book do projeto">
                    <img src="/images/ebook-passagem/01.png" alt="Página interna da cartilha do projeto">
                    <img src="/images/ebook-passagem/03.png" alt="Página interna da cartilha do projeto">
                </div>
            </div>
            
            <div class="trabalho-card">
                <h4>Cartilha Aroeira</h4>
                <a class="trabalho-link" href="https://heyzine.com/flip-book/7a468ab933.html" target="_blank" rel="noopener noreferrer">
                    Acessar cartilha
                </a>
                <div class="trabalho-galeria">
                    <img src="/images/ebook-aroeira/cartilha aroeira.png" alt="Capa da cartilha do projeto">
                    <img src="/images/ebook-aroeira/01.png" alt="Capa do E-book do projeto">
                    <img src="/images/ebook-aroeira/02.png" alt="Página interna da cartilha do projeto">
                </div>
            </div>

            <div class="trabalho-card">
                <h4>Cartilhas Lagoa dos Anjos</h4>
                <p class="trabalho-em-breve">Conteúdo em organização.</p>
                <div class="trabalho-galeria">
                    <img src="/images/ebook-aroeira/cartilha aroeira.png" alt="Capa da cartilha do projeto">
                    <img src="/images/ebook-aroeira/01.png" alt="Capa do E-book do projeto">
                    <img src="/images/ebook-aroeira/02.png" alt="Página interna da cartilha do projeto">
                </div>
            </div>

            <div class="trabalho-card">
                <h4>Cartilhas Vargem Alta</h4>
                <p class="trabalho-em-breve">Conteúdo em organização.</p>
                <div class="trabalho-galeria">
                    <img src="/images/ebook-aroeira/cartilha aroeira.png" alt="Capa da cartilha do projeto">
                    <img src="/images/ebook-aroeira/01.png" alt="Capa do E-book do projeto">
                    <img src="/images/ebook-aroeira/02.png" alt="Página interna da cartilha do projeto">
                </div>
            </div>

            <div class="trabalho-card">
                <h4>Cartilhas Vargem Comprida</h4>
                <p class="trabalho-em-breve">Conteúdo em organização.</p>
                <div class="trabalho-galeria">
                    <img src="/images/ebook-aroeira/cartilha aroeira.png" alt="Capa da cartilha do projeto">
                    <img src="/images/ebook-aroeira/01.png" alt="Capa do E-book do projeto">
                    <img src="/images/ebook-aroeira/02.png" alt="Página interna da cartilha do projeto">
                </div>
            </div>

            <div class="trabalho-card">
                <h4>Cartilhas de Boi</h4>
                <p class="trabalho-em-breve">Conteúdo em organização.</p>
                <div class="trabalho-galeria">
                    <img src="/images/ebook-aroeira/cartilha aroeira.png" alt="Capa da cartilha do projeto">
                    <img src="/images/ebook-aroeira/01.png" alt="Capa do E-book do projeto">
                    <img src="/images/ebook-aroeira/02.png" alt="Página interna da cartilha do projeto">
                </div>
            </div>
        </div>

    </section>
</div>


@endsection
