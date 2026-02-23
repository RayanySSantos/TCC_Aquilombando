@extends('layouts.app')

@section('content')

{{-- ================= SOBRE O PROJETO ================= --}}
<div class="bloco-fundo fundo-branco">
    <section class="secao sobre-intro">
        <h1 class="titulo-pagina">Sobre Nós</h1>
        <p>
        Este projeto nasceu do desejo de documentar, preservar e divulgar a rica herança cultural das comunidades quilombolas do Alto Sertão Produtivo Baiano. A iniciativa foi desenvolvida no âmbito do projeto Mapeamento Gastronômico: o resgate dos saberes culinários quilombolas no Território Sertão Produtivo, tendo como missão contribuir para a valorização do patrimônio material e imaterial dessas comunidades, fortalecendo sua identidade e promovendo o reconhecimento de sua importância histórica e cultural.
        </p>

        <p>
        Por meio de uma pesquisa participativa, da documentação audiovisual e do trabalho colaborativo com os moradores das comunidades, buscou-se construir um registro abrangente dos saberes e fazeres culinários tradicionais. Esse material tem como finalidade preservar a memória coletiva e atuar como instrumento educativo, possibilitando a transmissão desses conhecimentos às novas gerações e ampliando a visibilidade da cultura quilombola.
        </p>

        <p>
        Este sistema foi desenvolvido como Trabalho de Conclusão de Curso (TCC) no curso de Análise e Desenvolvimento de Sistemas do Instituto Federal Baiano – Campus Guanambi, possuindo caráter acadêmico, educacional e cultural. A plataforma digital foi criada como ferramenta de organização, divulgação e acesso às informações coletadas durante a pesquisa, reunindo conteúdos sobre história, culinária, agricultura familiar, artesanato e tradições das comunidades participantes.
        </p>

        <p>
        O projeto não possui finalidade comercial, sendo orientado por princípios éticos de respeito, protagonismo comunitário e valorização dos saberes ancestrais. Seu objetivo central é fortalecer a identidade quilombola, promover o reconhecimento social dessas comunidades e contribuir para a preservação de sua memória histórica por meio da tecnologia.
        </p>
        
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
                    <img src="/images/Equipe/Geo.jpeg" alt="João Santos">
                </div>
                <h3>Mr. George Gabriel Mendes Dourado</h3>
                <span>Coorientador</span>
                <p>Professor EBTT do Instituto Federal de Educação, Ciên-cia e Tecnologia Baiano (IF Baiano) Campus Guanambi. Mestre em Ciências da Computação e Matemática Computacional pelo Instituto de Ciências Matemáticas e de Computação da Universidade de São Paulo (ICMC/USP), em 2015. Graduado no curso de Bacha-relado em Ciência da Computação pela Universidade Estadual do Sudoeste da Bahia (UESB), em 2012.</p>
            </div>

            <div class="card-equipe">
                <div class="avatar">
                    <img src="/images/Equipe/Dani.jpeg" alt="Ana Oliveira">
                </div>
                <h3>Dr. Daniele de Brito Trindade</h3>
                <span>Orientadora</span>
                <p>Professora EBTT do Instituto Federal de Educação, Ciência e Tecnologia Baiano (IF Baiano) Campus Guanambi. Professora colaboradora do Mestrado Profissional em Produção Vegetal no Semiárido (MPPVS) e coordenadora substituta do Curso de Licenciatura em Ciências Biológicas. Líder do Grupo de Pesquisa HAFROQI e membro do NEABI. Doutora e Mestra em Estatística pela Universidade Federal de Pernambuco (UFPE), e graduada em Bacharelado em Estatística pela Universidade Federal da Bahia (UFBA).</p>
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
                    <img src="/images/Equipe/Luis.jpeg" alt="Luis Gustavo Cartoso da Silva">
                </div>
                <span>Luis Gustavo Cartoso da Silva</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/Dan.jpeg" alt="Daniela da Silva Aires">
                </div>
                <span>Daniela da Silva Aires</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/v1.jpeg" alt="João Vitor dos Santos Ramos">
                </div>
                <span>João Vitor dos Santos Ramos</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/tais.jpeg" alt="Tais Carolane Souza Almeida">
                </div>
                <span>Tais Carolane Souza Almeida</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/equipe/lucas.jpg" alt="Lucas">
                </div>
                <span>Lucas</span>
            </div>


        </div>

        {{-- ================= DOCENTES ================= --}}
        <h3 class="categoria">Docentes</h3>
        <div class="linha-circulos marrom">

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/equipe/lucas.jpg" alt="Lucas">
                </div>
                <span>Lucas</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/equipe/lucas.jpg" alt="Lucas">
                </div>
                <span>Lucas</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/equipe/lucas.jpg" alt="Lucas">
                </div>
                <span>Lucas</span>
            </div>

        </div>

        {{-- ================= COLABORADORES EXTERNOS ================= --}}
        <h3 class="categoria">Colaboradores Externos</h3>
        <div class="linha-circulos vermelho">

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/ieda.jpeg" alt="Iêda da Silva Guimarães Soares">
                </div>
                <span>Iêda da Silva Guimarães Soares</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/flavia.jpeg" alt="Flávia Eugínia Pereira Gomes">
                </div>
                <span>Flávia Eugínia Pereira Gomes</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/ramon.jpeg" alt="Ramon Lima Silva">
                </div>
                <span>Ramon Lima Silva</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/linda.jpeg" alt="Lindaberg da Rocha Macedo">
                </div>
                <span>Lindaberg da Rocha Macedo</span>
            </div>

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/lucelia.jpeg" alt="Lucélia Amorim da Silva">
                </div>
                <span>Lucélia Amorim da Silva</span>
            </div>

             <div class="pessoa">
                <div class="circulo">
                    <img src="/images/Equipe/bianca.jpeg" alt="Bianca de Carvalho Silva">
                </div>
                <span>Bianca de Carvalho Silva</span>
            </div>

        </div>

    </section>
</div>



{{-- ================= METODOLOGIA ================= --}}
<div class="bloco-metodologia">
    <section class="secao metodologia">

        <h2>Metodologia do Projeto</h2>

        <div class="grid-metodologia">
            <div>
                <h4>Nossa Abordagem</h4>
                <ul>
                    <li>Pesquisa participativa envolvendo moradores</li>
                    <li>Documentação audiovisual</li>
                    <li>Entrevistas com guardiões da memória</li>
                    <li>Registro do patrimônio material e imaterial</li>
                    <li>Catalogação de saberes tradicionais</li>
                </ul>
            </div>

            <div>
                <h4>Princípios Éticos</h4>
                <ul>
                    <li>Respeito ao protagonismo comunitário</li>
                    <li>Consentimento informado</li>
                    <li>Reconhecimento dos saberes tradicionais</li>
                    <li>Devolução dos resultados às comunidades</li>
                    <li>Representação respeitosa</li>
                </ul>
            </div>
        </div>

    </section>
</div>


@endsection
