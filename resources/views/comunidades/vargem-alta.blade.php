@extends('layouts.comunidade')

@section('titulo', 'Comunidade Vargem Alta')
@section('nome-comunidade', 'COMUNIDADE VARGEM ALTA')

@section('conteudo')

{{-- ===========================================================
                        HISTÓRIA
=========================================================== --}}
<div class="bloco-fundo fundo-branco">
    <section class="secao" id="historia">

        <div class="linha-principal">
            
            <div class="texto">
                <h2>📜 História</h2>
                <p>A Comunidade Quilombola de Vargem Alta, localizada na zona rural do município de Palmas de Monte Alto, Bahia,
                    possui uma trajetória marcada pela força e resistência de seus antepassados, que enfrentaram inúmeros desafios
                    para garantir a permanência no território e manter vivas suas tradições. Os primeiros moradores superaram períodos
                    de grande dificuldade e construíram uma comunidade baseada na união e na solidariedade. A agricultura sempre foi o
                    alicerce econômico e cultural, com destaque para o cultivo de feijão, mandioca, umbu-cajá, manga, goiaba, acerola,
                    tamarindo e laranja, alimentos que sustentam as famílias e preservam o modo de vida tradicional.
                </p>

                <p>A certificação oficial como quilombo, concedida pela Fundação Cultural Palmares em 31 de dezembro de 2008, com apoio
                    da Secretaria de Educação, representou um marco importante para a comunidade. Esse reconhecimento possibilitou o
                    acesso a benefícios como cestas básicas, atendimento médico, caixas d’água, cisternas e programas voltados ao meio rural,
                    além de fortalecer a identidade quilombola. No âmbito da organização social, a liderança comunitária foi exercida inicialmente
                    por Manoel José de Lima, que esteve à frente da comunidade por quatro anos.
                </p>

                <p>Posteriormente, a função passou a ser desempenhada por Sidália Montalvão de Brito, que, a pedido dos moradores, lidera a
                    comunidade há quase dois anos, buscando fortalecer a união e promover melhorias por meio de projetos culturais e sociais.
                    Entre os avanços mais recentes estão a chegada da energia elétrica, a criação da Associação Comunitária, o acesso à internet
                    e a implementação da fábrica de farinha. Esses marcos representam não apenas desenvolvimento estrutural, mas também o fortalecimento
                    da autonomia, da organização coletiva e da identidade quilombola de Vargem Alta.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Vargem Alta/historia/hi1.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/historia/hi2.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/historia/hi3.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/historia/hi4.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/historia/hi5.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Vargem Alta/historia/hi1.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/historia/hi2.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/historia/hi3.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/historia/hi4.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/historia/hi5.jpeg') }}">
        
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
                <p>As manifestações culturais seguem presentes no cotidiano da Comunidade Quilombola de Vargem Alta, expressando-se por meio de rezas tradicionais,
                    do reisado, das festas juninas e das comemorações do Dia da Consciência Negra. Essas práticas fortalecem o sentimento de pertencimento coletivo
                    e reafirmam a identidade quilombola, funcionando como espaços de encontro, fé, celebração e memória.
                </p>

                <p>A cultura ocupa um lugar central na vida comunitária, sendo transmitida de geração em geração por meio de rituais que envolvem música,
                    dança, espiritualidade e oralidade. As rezas, os festejos e as celebrações coletivas reforçam os vínculos culturais e preservam a memória
                    coletiva, mantendo vivas as tradições herdadas dos antepassados e contribuindo para a continuidade da identidade cultural da comunidade.
                </p>

                <p>Além das celebrações, iniciativas como oficinas de artesanato e atividades culturais desempenham papel fundamental na transmissão dos
                    saberes ancestrais. Essas ações possibilitam que crianças e jovens conheçam, valorizem e pratiquem as tradições locais, garantindo que
                    a memória cultural de Vargem Alta continue viva e fortalecida no cotidiano da comunidade.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Vargem Alta/festejos/f1.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/festejos/f2.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/festejos/f3.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/festejos/f4.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/festejos/f5.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/festejos/f6.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Vargem Alta/festejos/f1.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/festejos/f2.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/festejos/f3.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/festejos/f4.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/festejos/f5.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/festejos/f6.jpeg') }}">
        
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
                <p>O artesanato da Comunidade Quilombola de Vargem Alta é uma expressão concreta da tradição, da criatividade e da identidade cultural local.
                    Entre as práticas mais valorizadas estão a produção de peças em crochê, o fiar do algodão, a tecelagem no tear de roda, além de técnicas
                    como ponto cruz, marambaia, vagonite e costura, bem como outros trabalhos manuais com materiais disponíveis no território. Cada peça produzida
                    reflete a memória coletiva e os saberes ancestrais transmitidos ao longo das gerações.
                </p>

                <p>As mulheres desempenham papel central na preservação e continuidade dessas práticas artesanais, sendo responsáveis por ensinar aos mais
                    jovens os modos tradicionais de produção. O aprendizado do artesanato fortalece os laços familiares e comunitários, promovendo a troca
                    de conhecimentos e valorizando o trabalho manual como elemento fundamental da identidade quilombola de Vargem Alta.
                </p>

                <p>Além de seu valor cultural e simbólico, o artesanato contribui para a economia local, uma vez que muitas peças são comercializadas
                    em feiras e eventos, gerando renda e promovendo maior autonomia financeira. Mais do que simples objetos, os trabalhos manuais representam
                    resistência cultural, pertencimento e empoderamento feminino, mantendo viva a memória da comunidade e reforçando a importância de preservar
                    as tradições para as futuras gerações.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Vargem Alta/artesanato/a1.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/artesanato/a3.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/artesanato/a4.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/artesanato/a5.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Vargem Alta/artesanato/a1.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/artesanato/a3.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/artesanato/a4.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/artesanato/a5.jpeg') }}">
        
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
                <p>A agricultura familiar é a base da subsistência e do modo de vida da Comunidade Quilombola de Vargem Alta. Os moradores cultivam feijão,
                    mandioca, umbu-cajá, manga, goiaba, acerola, tamarindo, laranja e diversas hortaliças, garantindo alimentos frescos para o consumo das famílias.
                    Esses cultivos seguem práticas tradicionais e sustentáveis, respeitando os ciclos naturais e fortalecendo a ligação da comunidade com o território.
                </p>

                <p>O trabalho agrícola é realizado de forma coletiva, envolvendo diferentes gerações da comunidade, o que possibilita a transmissão contínua
                    de conhecimentos e habilidades relacionadas ao manejo da terra. A convivência diária com a roça promove a educação ambiental e reforça a
                    valorização da herança cultural quilombola, mantendo vivos os saberes ancestrais associados à agricultura.
                    </p>

                <p>Além de assegurar o sustento das famílias, a produção agrícola permite a comercialização do excedente em feiras e mercados locais,
                    contribuindo para a autonomia econômica da comunidade. A relação direta com a terra reforça o sentimento de pertencimento e a preservação
                    dos modos de vida tradicionais, evidenciando que, em Vargem Alta, a agricultura familiar representa não apenas alimento, mas também cultura,
                    memória e resistência.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Vargem Alta/Agricultura/h1.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/Agricultura/h2.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/Agricultura/h3.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/Agricultura/h4.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Vargem Alta/Agricultura/h1.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/Agricultura/h2.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/Agricultura/h3.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/Agricultura/h4.jpeg') }}">
        
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
                <p>A culinária da Comunidade Quilombola de Vargem Alta é uma expressão viva da história, da memória e da identidade cultural local.
                    Os ingredientes cultivados no próprio território, como mandioca, umbu-cajá, feijão, manga e outros frutos nativos, são transformados
                    em pratos tradicionais que atravessam gerações. Preparações como pamonha, paçoca de gergelim, canjica, cortado de maxixe com nata,
                    além de doces e geleias artesanais, evidenciam a forte relação entre a agricultura familiar e os modos tradicionais de preparo dos alimentos,
                    compreendidos como patrimônio cultural da comunidade.
                </p>

                <p>O preparo dos alimentos ocorre, muitas vezes, de forma coletiva, envolvendo famílias inteiras em momentos de aprendizado, partilha e celebração.
                    A Casa de Farinha desempenha papel central nesse processo, promovendo a colaboração comunitária e garantindo autonomia produtiva.
                    Nesse contexto, os saberes culinários são transmitidos principalmente pelos mais velhos, fortalecendo os laços familiares e assegurando a
                    continuidade das práticas alimentares tradicionais no cotidiano da comunidade.
                </p>

                <p>Mais do que sustento, a culinária representa resistência cultural, pertencimento e afirmação identitária. Figuras da comunidade destacam-se
                    como guardiãs da memória local, preservando e transmitindo conhecimentos herdados dos antepassados por meio do cultivo da terra, do preparo dos
                    alimentos e da participação nas festas e manifestações culturais. Preservar essas receitas e modos de fazer significa manter viva a história
                    de Vargem Alta, reafirmar o orgulho de suas origens e garantir que os saberes culinários continuem sendo transmitidos às futuras gerações.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Vargem Alta/comida/p1.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/comida/p2.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/comida/p3.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/comida/p4.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Vargem Alta/comida/p1.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/comida/p2.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/comida/p3.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/comida/p4.jpeg') }}">
        
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
                <p>A Comunidade Quilombola de Vargem Alta é formada por histórias, afetos e saberes que atravessam gerações. Cada morador carrega consigo
                    fragmentos da memória coletiva, transformando o cotidiano em espaço de resistência e preservação cultural. São homens e mulheres que,
                    por meio da simplicidade, da sabedoria e do vínculo com a terra, mantêm vivos os costumes, a fé e as tradições que sustentam a identidade
                    quilombola da comunidade.
                </p>

                <p>Entre essas figuras, destacam-se mulheres guardiãs da memória cultural. Cleide da Conceição Oliveira de Jesus, nascida em Vargem Alta e moradora
                    da comunidade vizinha Lagoa de Canudo, carrega com orgulho os saberes aprendidos com a mãe, desde o plantio do milho até o preparo da pamonha,
                    prato simbólico das celebrações locais. É ela quem, junto a outras mulheres, prepara os alimentos nas festas e encontros comunitários.
                    Nilda Magalhães de Souza aprendeu a cozinhar ainda criança, observando a mãe no preparo das refeições diárias, e hoje une a culinária ao
                    trabalho na agricultura familiar, cultivando feijão, mandioca e hortaliças. Carlita Maria da Conceição Oliveira, herdeira dos saberes maternos,
                    preserva memórias do preparo dos alimentos em panelas de barro e da partilha em gamelas, além de cultivar hortaliças, costurar à mão e participar
                    do reisado, fortalecendo a tradição e a alegria coletiva.
                </p>

                <p>Os homens também exercem papel fundamental na preservação da memória e dos saberes tradicionais. Aucides Lima de Oliveira, morador de Vargem Alta
                    desde os 22 anos, dedicou grande parte de sua vida à agricultura familiar e participa ativamente do reisado, expressão cultural que une fé,
                    música e devoção. Seu filho, Reginaldo Lima de Oliveira, trabalha na roça desde os 10 anos de idade e vive da agricultura familiar, cultivando
                    feijão, mandioca, milho, sorgo e palma. Juntos, representam a continuidade de uma história marcada pela união familiar, pelo trabalho coletivo e
                    pelo profundo amor ao território quilombola.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Vargem Alta/guardia/g1.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/guardia/g2.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/guardia/g3.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/guardia/g4.jpg') }}">
                <img src="{{ asset('images/Vargem Alta/guardia/g5.JPG') }}">
                <img src="{{ asset('images/Vargem Alta/guardia/g6.jpg') }}">
                <img src="{{ asset('images/Vargem Alta/guardia/g7.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/guardia/g8.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/guardia/g9.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/guardia/g10.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Vargem Alta/guardia/g1.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/guardia/g2.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/guardia/g3.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/guardia/g4.jpg') }}">
                <img src="{{ asset('images/Vargem Alta/guardia/g5.JPG') }}">
                <img src="{{ asset('images/Vargem Alta/guardia/g6.jpg') }}">
                <img src="{{ asset('images/Vargem Alta/guardia/g7.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/guardia/g8.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/guardia/g9.jpeg') }}">
                <img src="{{ asset('images/Vargem Alta/guardia/g10.jpeg') }}">
        
            </div>
        </div>
        

    </section>
</div>

@endsection
