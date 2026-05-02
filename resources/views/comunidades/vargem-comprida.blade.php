@extends('layouts.comunidade')

@section('titulo', 'Quilombo Vargem Comprida')
@section('nome-comunidade', 'QUILOMBO VARGEM COMPRIDA')
@section('fonte-quilombo', 'Quilombo Vargem Comprida')

@section('conteudo')

{{-- ===========================================================
                        HISTÓRIA
=========================================================== --}}
<div class="bloco-fundo fundo-branco">
    <section class="secao" id="historia">

        <div class="linha-principal">
            
            <div class="texto">
                <h2>📜 História</h2>
                <p> A Comunidade Quilombola de Vargem Comprida, localizada na zona rural de Palmas de Monte Alto-BA, mantém vivos os saberes e modos de vida herdados de seus antepassados. Segundo relatos dos moradores, seus primeiros habitantes vieram da região de Macaúbas, em busca de liberdade e de um território onde pudessem viver e construir suas próprias trajetórias. Desde então, a comunidade se fortalece na partilha de memórias, no trabalho coletivo e na continuidade dos ensinamentos que atravessam gerações..
                </p>

                <p>A certificação pela Fundação Cultural Palmares foi obtida em <strong>15 de maio de 2016</strong>, resultado de um processo construído a partir de relatos, registros audiovisuais e da participação ativa de lideranças e matriarcas da comunidade. Esse reconhecimento fortaleceu os vínculos com o território e ampliou o acesso a políticas públicas voltadas aos povos tradicionais.
                </p>

                <p>Atualmente, Vargem Comprida é liderada por <strong>Leonardo de Oliveira Brito</strong>, morador que sempre viveu na
                    comunidade e desempenha seu papel com dedicação há três anos. Católico e formado no ensino superior,
                    trabalha com agricultura e defende a preservação cultural como caminho para fortalecer as novas
                    gerações. Entre as figuras de maior importância está <strong>Dona Silvalina Maria de Oliveira</strong>,
                    carinhosamente chamada de “Vó”. Guardiã de saberes, tradições e memórias, ela é reconhecida pela
                    comunidade como matriarca e referência ancestral, tendo transmitido às novas gerações histórias,
                    ensinamentos, práticas de artesanato e culinária.
                </p>
            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
                <!-- BLOCO ORIGINAL -->
                <img src="{{ asset('images/Vargem Comprida/historia/hi1.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/historia/hi2.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/historia/hi3.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/historia/hi4.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/historia/hi5.jpeg') }}">

                <!-- BLOCO DUPLICADO (OBRIGATÓRIO) -->
                <img src="{{ asset('images/Vargem Comprida/historia/hi1.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/historia/hi2.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/historia/hi3.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/historia/hi4.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/historia/hi5.jpeg') }}">
            </div>
        </div>

    </section>
</div>



{{-- ===========================================================
                        REISADO
=========================================================== --}}
<div class="bloco-fundo fundo-amarelo">
    <section class="secao" id="reisado">


        <div class="linha-principal">
            <div class="texto">
                <h2>🎶 Festejos</h2>
                <p>O Reisado é uma das manifestações mais significativas da Comunidade Quilombola de Vargem Comprida,
                    configurando-se como uma expressão coletiva de fé, memória e identidade. A tradição reúne moradores em um
                    cortejo marcado por cantos, versos e danças conduzidas por instrumentos simples, que dão ritmo e sentido à celebração.
                    Mais do que um evento religioso, o Reisado representa um momento de encontro e fortalecimento dos laços comunitários,
                    no qual a ancestralidade é celebrada e reafirmada por meio da participação ativa dos diferentes grupos da comunidade.
                </p>

               <p>
                Transmitido entre gerações, o Reisado mantém viva a ligação da comunidade com seus modos de viver e com a espiritualidade. Crianças, jovens e adultos participam conjuntamente da festividade, aprendendo, na prática, os cantos, os versos e os significados que a envolvem. Esse processo de partilha, baseado na experiência e na oralidade, contribui para a continuidade dos saberes e fortalece o sentimento de pertencimento e respeito à história coletiva de Vargem Comprida.
                </p>

                <p>
                Presente no cotidiano da comunidade, o Reisado dialoga com outras práticas que também fortalecem a vida coletiva, como as danças de roda, as vias sacras, a missa do padroeiro, o Natal e as celebrações de São João. Em conjunto, esses momentos reafirmam valores como união, espiritualidade e ancestralidade, atuando como formas de permanência e resistência ao longo do tempo. Assim, o Reisado se consolida não apenas como uma festividade, mas como um elemento central na continuidade das memórias, dos saberes e das formas de vida da comunidade.
                </p>
            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
                <!-- FESTEJOS – VARGEM COMPRIDA -->
                <img src="{{ asset('images/Vargem Comprida/festejos/f1.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/festejos/f3.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/festejos/f4.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/festejos/f5.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/festejos/f6.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/festejos/f7.jpeg') }}">

                <!-- DUPLICAÇÃO PARA LOOP INFINITO -->
                <img src="{{ asset('images/Vargem Comprida/festejos/f1.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/festejos/f3.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/festejos/f4.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/festejos/f5.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/festejos/f6.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/festejos/f7.jpeg') }}">
            </div>
        </div>

    </section>
</div>



{{-- ===========================================================
                        ARTESANATO
=========================================================== --}}
<div class="bloco-fundo fundo-branco">
    <section class="secao" id="artesanato">


        <div class="linha-principal">
            <div class="texto">
                <h2>🧶 Artesanato</h2>
                <p>
                O artesanato na Comunidade Quilombola de Vargem Comprida expressa saberes, criatividade e modos próprios de fazer, sendo desenvolvido principalmente pelas mulheres da comunidade. A produção envolve peças em algodão no tear de roda, além de técnicas como crochê, ponto cruz, marambaia, vagonite e costura. Cada peça carrega conhecimentos partilhados entre gerações, mantendo em circulação memórias e fortalecendo os vínculos entre passado e presente no cotidiano da comunidade.
                </p>

                <p>
                O algodão ocupa um lugar central nesse fazer, constituindo um elo com os conhecimentos herdados. O processo de fiar e transformar o algodão em fios é preservado pelas mulheres, que dominam técnicas aprendidas desde cedo. Esses fios são utilizados no tear de roda para a confecção de toalhas, cachecóis e outras peças, destinadas tanto ao uso cotidiano quanto à comercialização. O trabalho manual com o algodão reafirma a continuidade dos saberes, o cuidado com o tempo de produção e a relação respeitosa com os ritmos da natureza.
                </p>
                
                <p>Nesse contexto, destaca-se a trajetória de Dona Silvalina Maria de Oliveira, reconhecida como guardiã desses conhecimentos
                    na comunidade. Desde os 14 anos de idade, ela aprendeu com a avó e as tias as técnicas de fiar, marcar e tecer, tornando-se
                    referência no uso do tear de roda. Dona Silvalina transmitiu esses saberes aos filhos José Humberto de Oliveira e
                    Raimunda Lopes de Oliveira Brito, garantindo a continuidade da prática artesanal na família. Antigamente, o processo
                    incluía também o tingimento manual dos fios em tachos de barro, no qual as linhas eram fervidas em água e posteriormente
                    colocadas para secar, evidenciando a criatividade, a autonomia e o profundo conhecimento tradicional da comunidade.
                </p>

                <p>Além de seu valor cultural e simbólico, o artesanato de Vargem Comprida também desempenha um papel importante na geração
                    de renda. As peças produzidas são comercializadas em feiras e eventos locais e regionais, contribuindo para a autonomia
                    financeira das famílias e para o fortalecimento da economia comunitária. Mais do que objetos utilitários, o artesanato
                    representa orgulho, pertencimento e resistência, reafirmando a importância da tradição quilombola e assegurando que esses
                    saberes continuem vivos para as futuras gerações.
                </p>
            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens" style="animation-duration: 70s;">
        
                <!-- ARTESANATO – VARGEM COMPRIDA -->
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a1.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a2.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a3.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a4.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a5.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a6.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a7.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a8.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a9.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a10.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a11.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a12.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a13.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a14.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a15.jpeg') }}">
        
                <!-- DUPLICAÇÃO PARA LOOP INFINITO -->
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a1.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a2.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a3.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a4.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a5.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a6.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a7.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a8.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a9.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a10.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a11.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a12.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a13.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a14.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Artesanato/a15.jpeg') }}">
        
            </div>
        </div>
        

    </section>
</div>

{{-- ===========================================================
                    AGRICULTURA FAMILIAR
=========================================================== --}}
<div class="bloco-fundo fundo-amarelo">
    <section class="secao" id="agricultura">


        <div class="linha-principal">
            <div class="texto">
                <h2>🌱 Agricultura Familiar</h2>
                <p>A agricultura familiar é fundamental para a subsistência e o modo de vida da Comunidade Quilombola de Vargem Comprida.
                    Os moradores cultivam feijão, milho, mandioca, batata-doce, maxixe, abóbora, hortaliças, frutas e raízes em pequenos
                    roçados próximos às casas, garantindo alimentos frescos e saudáveis para as famílias. Essa produção local fortalece a
                    autonomia alimentar e mantém a relação direta da comunidade com a terra, elemento central na construção de sua identidade quilombola.
                </p>

                <p>O cultivo agrícola é realizado de forma coletiva, envolvendo pais, filhos e netos, o que favorece o aprendizado e a
                    transmissão dos conhecimentos tradicionais sobre o manejo da terra. A convivência cotidiana com a roça permite que
                    práticas sustentáveis e saberes ancestrais sejam preservados e compartilhados entre gerações. Dessa forma, o trabalho
                    agrícola vai além da produção de alimentos, funcionando como um espaço de educação cultural, fortalecimento dos laços
                    familiares e valorização do território.
                 </p>

                 <p>Além de assegurar o sustento das famílias, a agricultura familiar possibilita a comercialização do excedente em feiras locais
                    e regionais, contribuindo para a geração de renda e a autonomia econômica da comunidade. Essa relação direta com a terra reforça
                    a preservação dos modos de vida tradicionais e evidencia a agricultura como um elemento de resistência cultural. Assim, em Vargem Comprida,
                    a agricultura familiar se consolida como prática que une sustento, cultura e identidade quilombola.
                </p>
            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <!-- AGRICULTURA – VARGEM COMPRIDA -->
                <img src="{{ asset('images/Vargem Comprida/Agricultura/h1.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Agricultura/h2.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Agricultura/h3.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Agricultura/h4.jpeg') }}">
        
                <!-- DUPLICAÇÃO PARA LOOP INFINITO -->
                <img src="{{ asset('images/Vargem Comprida/Agricultura/h1.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Agricultura/h2.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Agricultura/h3.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/Agricultura/h4.jpeg') }}">
        
            </div>
        </div>
        

    </section>
</div>


{{-- ===========================================================
                           CULINÁRIA
=========================================================== --}}
<div class="bloco-fundo fundo-branco">
    <section class="secao" id="culinaria">


        <div class="linha-principal">
            <div class="texto">
                <h2>🍲 Culinária</h2>
                <p>A culinária da Comunidade Quilombola de Vargem Comprida é uma das expressões mais fortes de sua ancestralidade e identidade cultural,
                    refletindo a relação direta com a agricultura familiar e com os saberes herdados dos antepassados. Pratos como beiju debaixo da farinha,
                    polvilho assado na brasa, paçoca de gergelim, chouriço, pirão de maxixe, requeijão, escaldado, liordino, mingau de puba, galinhada e
                    farofa doce compõem um repertório culinário rico em sabores e significados. Essas receitas transformam os alimentos cultivados no
                    território em preparações que carregam história, memória e espiritualidade.
                </p>

                <p>Os ingredientes utilizados na culinária local, como feijão, milho, mandioca, batata-doce, maxixe, frutas e hortaliças, são provenientes,
                    em sua maioria, da própria comunidade, garantindo frescor e valorização da produção local. Cada prato representa um conhecimento
                    transmitido oralmente ao longo das gerações, preservando técnicas de preparo e combinações de sabores que expressam a memória coletiva.
                    Dessa forma, a culinária de Vargem Comprida se consolida como um patrimônio imaterial que conecta passado e presente por meio do alimento.
                 </p>

                 <p>O preparo dos alimentos ocorre, muitas vezes, de forma coletiva, envolvendo famílias inteiras em momentos de troca, aprendizado e celebração.
                    Cozinhar é, para os moradores, uma forma de manter viva a memória dos antepassados, fortalecer os laços familiares e reafirmar a identidade
                    quilombola. Mais do que sustento, a culinária representa tradição, resistência e pertencimento, assegurando que os saberes tradicionais continuem vivos e sejam transmitidos às futuras gerações.
                </p>
            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <!-- COMIDA – VARGEM COMPRIDA -->
                <img src="{{ asset('images/Vargem Comprida/comida/p1.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/comida/p2.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/comida/p3.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/comida/p4.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/comida/p5.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/comida/p6.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/comida/p7.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/comida/p8.jpeg') }}">
        
                <!-- DUPLICAÇÃO PARA LOOP INFINITO -->
                <img src="{{ asset('images/Vargem Comprida/comida/p1.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/comida/p2.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/comida/p3.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/comida/p4.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/comida/p5.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/comida/p6.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/comida/p7.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/comida/p8.jpeg') }}">
        
            </div>
        </div>
        

    </section>
</div>



{{-- ===========================================================
                     GUARDIÕES DA MEMÓRIA
=========================================================== --}}
<div class="bloco-fundo fundo-amarelo">
    <section class="secao" id="guardioes">


        <div class="linha-principal">
            <div class="texto">
                <h2>👵 Guardiões da Memória</h2>
                <p>
                O Quilombo de Vargem Comprida mantém viva sua história por meio da força coletiva e, especialmente, do protagonismo das mulheres, que transmitem saberes, práticas culinárias, tradições e afetos entre gerações. É no cotidiano, entre o cultivo da terra, a preparação dos alimentos e os momentos de partilha, que a memória ancestral se renova e a identidade quilombola se fortalece. Entre os guardiões, destacam-se:
                </p>

                <p>
                Silvalina Maria de Oliveira, 90 anos, é reconhecida como matriarca da Comunidade Quilombola de Vargem Comprida. Moradora do território desde sempre, é guardiã de saberes e tradições transmitidos entre gerações, especialmente por meio das histórias, da culinária e do artesanato. Destaca-se pelo trabalho no tear, onde produz peças carregadas de significado cultural, preservando técnicas ancestrais e mantendo viva a memória coletiva da comunidade. Sua trajetória simboliza a continuidade da identidade quilombola e o fortalecimento dos laços familiares e culturais. (1)
                </p>

                <p>
                Maria Helena de Oliveira Brito, 59 anos, moradora do Quilombo desde o nascimento, é agricultora e contribui para a preservação do modo de vida tradicional (2).
                </p>

                <p>
                Maísa de Oliveira Brito, 29 anos, que aprendeu a cozinhar observando a mãe e mantém forte ligação com a culinária tradicional, especialmente no preparo do requeijão e da farofa de gergelim (3).
                </p>

                <p>
                Maria Elza Cândido de Oliveira, 61 anos, amante da culinária quilombola, que aprendeu a cozinhar com a mãe e atua na agricultura familiar ao lado da família, fortalecendo os laços culturais e comunitários (4).
                </p>

                <p>
                Raimunda Lopes de Oliveira Brito, 46 anos, mulher preta, católica e moradora da comunidade desde o nascimento, que se dedica ao artesanato desde a infância, preservando práticas manuais e culturais tradicionais (5).
                </p>

                <p>
                Adriana Maria de Oliveira Brito, 32 anos, que associa a culinária à alegria e à vida comunitária, destacando-se na preparação de alimentos durante as festas de São João e nas celebrações do padroeiro (6).
                </p>

                <p>
                Maria Madalena de Oliveira Lima, 73 anos, é artesã da comunidade e dedica-se ao trabalho no tear, saber que aprendeu com sua mãe ainda jovem. Por meio de suas mãos, mantém vivas técnicas tradicionais transmitidas entre gerações (7).
                </p>

                <p>
                Natalice de Oliveira Brito Lopes, atua no artesanato e construiu seus saberes a partir do aprendizado com diferentes pessoas da comunidade. Ela desenvolve trabalhos em crochê e ponto cruz, técnica aprendida com sua mãe e que também constitui uma importante fonte de renda (8).
                </p>

                <p>
                José Humberto de Oliveira, 71 anos, aprendeu a tecer com sua mãe e é reconhecido como um dos guardiões dos saberes da comunidade. Morador do território há muitos anos, carrega consigo conhecimentos ancestrais que fortalecem a memória coletiva e reafirmam a importância da tradição no cotidiano quilombola (9).
                </p>

                <p>
                Leonardo de Oliveira Brito, 36 anos, é morador do território e exerce a liderança da comunidade há três anos. Agricultor e técnico em Agropecuária, atua com dedicação no fortalecimento da organização comunitária, valorizando a preservação das tradições quilombolas e a continuidade cultural das futuras gerações (10).
                </p>

                <p>
                Assim, Vargem Comprida se afirma como um território de resistência cultural, onde memória, trabalho e coletividade se entrelaçam, reafirmando a importância de valorizar e transmitir os saberes tradicionais às futuras gerações.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens guardioes-enumeradas">

                <figure class="guardiao-item">
                    <span class="guardiao-numero">1</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/g1.jpeg') }}" alt="Guardiões da memória - imagem 1">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">2</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/g3.jpeg') }}" alt="Guardiões da memória - imagem 2">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">3</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/g4.jpeg') }}" alt="Guardiões da memória - imagem 3">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">4</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/g5.jpeg') }}" alt="Guardiões da memória - imagem 4">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">5</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/g7.jpeg') }}" alt="Guardiões da memória - imagem 5">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">6</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/g8.jpeg') }}" alt="Guardiões da memória - imagem 6">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">7</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/g11.jpeg') }}" alt="Guardiões da memória - imagem 6">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">8</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/g12.jpeg') }}" alt="Guardiões da memória - imagem 6">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">9</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/g13.jpeg') }}" alt="Guardiões da memória - imagem 6">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">10</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/leo.jpeg') }}" alt="Guardiões da memória - imagem 6">
                </figure>

                <!-- DUPLICAÇÃO PARA LOOP INFINITO -->
                <figure class="guardiao-item">
                    <span class="guardiao-numero">1</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/g1.jpeg') }}" alt="Guardiões da memória - imagem 1">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">2</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/g3.jpeg') }}" alt="Guardiões da memória - imagem 2">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">3</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/g4.jpeg') }}" alt="Guardiões da memória - imagem 3">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">4</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/g5.jpeg') }}" alt="Guardiões da memória - imagem 4">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">5</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/g7.jpeg') }}" alt="Guardiões da memória - imagem 5">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">6</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/g8.jpeg') }}" alt="Guardiões da memória - imagem 6">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">7</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/g11.jpeg') }}" alt="Guardiões da memória - imagem 6">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">8</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/g12.jpeg') }}" alt="Guardiões da memória - imagem 6">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">9</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/g13.jpeg') }}" alt="Guardiões da memória - imagem 6">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">10</span>
                    <img src="{{ asset('images/Vargem Comprida/guardia/leo.jpeg') }}" alt="Guardiões da memória - imagem 6">
                </figure>

            </div>

        </div>        

    </section>
</div>


@endsection
