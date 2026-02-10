@extends('layouts.app')

@section('content')

{{-- ================= SOBRE O PROJETO ================= --}}
<div class="bloco-fundo fundo-branco">
    <section class="secao sobre-intro">
        <h1 class="titulo-pagina">Sobre Nós</h1>
        <p>
            Este projeto nasceu do desejo de documentar, preservar e divulgar a rica herança cultural das comunidades
            quilombolas do Alto Sertão Produtivo Baiano. A iniciativa foi desenvolvida no âmbito do projeto
            <strong>Mapeamento Gastronômico: o resgate dos saberes culinários quilombolas no Território Sertão Produtivo</strong>,
            tendo como missão contribuir para a valorização do patrimônio material e imaterial dessas comunidades,
            fortalecendo sua identidade e promovendo o reconhecimento de sua importância histórica e cultural.
        </p>
        
        <p>
            Por meio de uma pesquisa participativa, da documentação audiovisual e do trabalho colaborativo com os moradores
            das comunidades, buscou-se construir um registro abrangente dos saberes e fazeres culinários tradicionais.
            Esse material tem como finalidade preservar a memória coletiva e atuar como instrumento educativo, possibilitando
            a transmissão desses conhecimentos às novas gerações e ampliando a visibilidade da cultura quilombola.
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
                <p>Estudante de Analise Desenvolvimento de Sistemas e desenvolvedora deste website.</p>
            </div>

            <div class="card-equipe">
                <div class="avatar">
                    <img src="/images/Equipe/Geo.jpeg" alt="João Santos">
                </div>
                <h3>Mr. George Gabriel Mendes Dourado</h3>
                <span>Coorientador</span>
                <p>Professor do Instituto Federal Baiano, Campus Guanambi com experiência em desenvolvimento de sistemas.</p>
            </div>

            <div class="card-equipe">
                <div class="avatar">
                    <img src="/images/Equipe/Dani.jpeg" alt="Ana Oliveira">
                </div>
                <h3>Dr. Daniele de Brito Trindade</h3>
                <span>Orientadora</span>
                <p>Professora do Instituto Federal Baiano, Campus Guanambi com experiência em Estatistica, contribui orientando as etapas de pesquisa.</p>
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

            <div class="pessoa">
                <div class="circulo">
                    <img src="/images/equipe/lucas.jpg" alt="Lucas">
                </div>
                <span>Lucas</span>
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
