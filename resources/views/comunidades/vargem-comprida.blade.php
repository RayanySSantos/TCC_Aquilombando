@extends('layouts.comunidade')

@section('titulo', 'Comunidade Vargem Comprida')
@section('nome-comunidade', 'COMUNIDADE VARGEM COMPRIDA')

@section('conteudo')

{{-- ===========================================================
                        HISTÓRIA
=========================================================== --}}
<div class="bloco-fundo fundo-branco">
    <section class="secao" id="historia">

        <div class="linha-principal">
            
            <div class="texto">
                <h2>📜 História</h2>
                <p> A Comunidade Quilombola de Vargem Comprida, localizada na zona rural de Palmas de Monte Alto–BA,
                    preserva com orgulho a memória e os costumes herdados de seus antepassados. Segundo os moradores,
                    os primeiros habitantes vieram da região de Macaúbas, fugindo da escravidão em busca de liberdade
                    e terras para viver. Desde então, a comunidade se fortaleceu pela valorização das raízes e pelo
                    esforço coletivo de manter viva a cultura quilombola.
                </p>

                <p>A certificação oficial pela Fundação Cultural Palmares foi obtida em 
                    <strong>15 de maio de 2016</strong>, resultado de um processo que reuniu relatos,
                    registros audiovisuais e a participação ativa de lideranças e matriarcas da comunidade.
                    Esse reconhecimento reforçou o sentimento de pertencimento e ampliou o acesso a políticas públicas
                    voltadas para povos tradicionais.
                </p>

                <p>Atualmente, Vargem Comprida é liderada por <strong>Leonardo</strong>, morador que sempre viveu na
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
                <p>O Reisado é uma das manifestações culturais mais significativas da Comunidade Quilombola de Vargem Comprida,
                    configurando-se como uma expressão coletiva de fé, memória e identidade. A tradição reúne moradores em um
                    cortejo marcado por cantos, versos e danças conduzidas por instrumentos simples, que dão ritmo e sentido à celebração.
                    Mais do que um evento religioso, o Reisado representa um momento de encontro e fortalecimento dos laços comunitários,
                    no qual a ancestralidade é celebrada e reafirmada por meio da participação ativa dos diferentes grupos da comunidade.
                </p>

                <p>Transmitido de geração em geração, o Reisado mantém viva a ligação da comunidade com suas raízes culturais e espirituais.
                    Crianças, jovens e adultos participam conjuntamente da festividade, aprendendo, na prática, os cantos, os versos e os
                    significados que envolvem essa manifestação cultural. Esse processo de transmissão oral e vivencial contribui para a preservação
                    dos saberes tradicionais e para a continuidade da identidade quilombola, reforçando o sentimento de pertencimento e respeito à
                    história coletiva de Vargem Comprida.
                </p>

                <p>Inserido no cotidiano cultural da comunidade, o Reisado dialoga com outras práticas tradicionais que também fortalecem a vida
                     comunitária, como as danças de roda, as vias sacras, a missa do padroeiro, o Natal e as celebrações de São João. Conjuntamente,
                     essas manifestações reafirmam valores como união, espiritualidade e ancestralidade, funcionando como mecanismos de resistência
                     cultural frente ao passar do tempo. Assim, o Reisado se consolida não apenas como uma festividade, mas como um elemento central
                     na preservação da memória, da cultura e da identidade quilombola de Vargem Comprida.
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
                <p>O artesanato na Comunidade Quilombola de Vargem Comprida constitui uma expressão viva da tradição, da criatividade
                    e da identidade cultural local. Desenvolvido principalmente pelas mulheres da comunidade, o trabalho artesanal envolve
                    a produção de peças em algodão no tear de roda, além da utilização de técnicas como crochê, ponto cruz, marambaia,
                    vagonite e costura. Cada peça produzida carrega saberes transmitidos de geração em geração, representando a memória
                    coletiva e reforçando o vínculo entre passado e presente na construção da identidade quilombola.
                </p>
                
                <p>O algodão ocupa um lugar central nesse processo artesanal, simbolizando um elo ancestral com os conhecimentos herdados
                    dos antepassados. O ato de <strong>fiar o algodão </strong> e transformá-lo em fios é cuidadosamente preservado pelas mulheres, que dominam
                    técnicas aprendidas desde a infância. Esses fios são utilizados no tear de roda para confeccionar toalhas, cachecóis e
                    outras peças que atendem tanto às necessidades cotidianas quanto à comercialização. O trabalho manual com o algodão
                    representa resistência cultural, continuidade dos saberes tradicionais e respeito ao tempo e aos ritmos da natureza.
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
            <div class="tres-imagens">
        
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
                    Dessa forma, a culinária de Vargem Comprida se consolida como um patrimônio cultural que conecta passado e presente por meio do alimento.
                 </p>

                 <p>O preparo dos alimentos ocorre, muitas vezes, de forma coletiva, envolvendo famílias inteiras em momentos de troca, aprendizado e celebração.
                    Cozinhar é, para os moradores, uma forma de manter viva a memória dos antepassados, fortalecer os laços familiares e reafirmar a identidade
                    quilombola. Mais do que sustento, a culinária representa resistência cultural e pertencimento, assegurando que os saberes tradicionais
                    continuem vivos e sejam transmitidos às futuras gerações.
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
                <p>A Comunidade Quilombola de Vargem Comprida mantém viva sua história por meio da força coletiva e, especialmente,
                    do protagonismo das mulheres, que transmitem saberes, práticas culinárias, tradições e afetos entre gerações.
                    É no cotidiano, entre o cultivo da terra, a preparação dos alimentos e os momentos de partilha, que a memória
                    ancestral se renova e a identidade quilombola se fortalece.
                </p>

                <p>Entre essas mulheres, destacam-se Maria Elza Cândido de Oliveira, 61 anos, que aprendeu a cozinhar com a mãe e preserva
                    os sabores tradicionais da comunidade por meio da culinária e da agricultura familiar; Maísa de Oliveira Brito, 29 anos,
                    que se dedica ao preparo do requeijão e da farofa de gergelim, receitas carregadas de memória e ancestralidade;
                    e Adriana Maria de Oliveira Brito, 32 anos, que associa a culinária à alegria, à vida comunitária e às celebrações coletivas.
                    Cada uma delas atua como guardiã dos saberes culinários, mantendo viva a tradição por meio da oralidade e da prática cotidiana.
                 </p>

                 <p>Assim, Vargem Comprida se afirma como um território de resistência cultural, onde memória, trabalho e coletividade se entrelaçam.
                    Esta cartilha constitui mais que um registro: é um testemunho da força cultural da comunidade e da importância de valorizar os
                    saberes e fazeres tradicionais, garantindo que esses conhecimentos continuem sendo transmitidos às futuras gerações como parte
                    fundamental da cultura quilombola e da história brasileira.
                 </p>
            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <!-- GUARDIÕES – VARGEM COMPRIDA -->
                <img src="{{ asset('images/Vargem Comprida/guardia/g1.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/guardia/g2.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/guardia/g3.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/guardia/g4.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/guardia/g5.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/guardia/g6.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/guardia/g7.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/guardia/g8.jpeg') }}">
        
                <!-- DUPLICAÇÃO PARA LOOP INFINITO -->
                <img src="{{ asset('images/Vargem Comprida/guardia/g1.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/guardia/g2.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/guardia/g3.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/guardia/g4.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/guardia/g5.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/guardia/g6.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/guardia/g7.jpeg') }}">
                <img src="{{ asset('images/Vargem Comprida/guardia/g8.jpeg') }}">
        
            </div>
        </div>        

    </section>
</div>


@endsection
