@extends('layouts.comunidade')

@section('titulo', 'Comunidade Passagem de Areia')
@section('nome-comunidade', 'COMUNIDADE PASSAGEM DE AREIA')

@section('conteudo')

{{-- ===========================================================
                        HISTÓRIA
=========================================================== --}}
<div class="bloco-fundo fundo-branco">
    <section class="secao" id="historia">

        <div class="linha-principal">
            
            <div class="texto">
                <h2>📜 História</h2>
                <p>O processo de certificação quilombola da Comunidade Quilombola de Passagem de Areia, concluído em 2011, representou um marco significativo
                    em sua trajetória histórica. Conduzido pela Fundação Palmares, o reconhecimento envolveu levantamento documental,
                    relatos orais e intensa mobilização interna dos moradores. Embora fundamental para a consolidação da identidade quilombola, esse processo
                    também evidenciou divergências e tensões relacionadas ao pertencimento, às expectativas e às responsabilidades coletivas dentro da comunidade.
                </p>

                <p>Apesar dos desafios enfrentados durante a certificação, o reconhecimento oficial ampliou o acesso da comunidade a políticas públicas e contribuiu
                    para o fortalecimento da identidade quilombola no território. A certificação possibilitou maior visibilidade às demandas locais e reforçou a
                    importância da organização coletiva como estratégia de resistência, preservação cultural e garantia de direitos históricos.
                </p>

                <p>Atualmente, a liderança comunitária é exercida por Rosângela, mulher negra, católica, de 41 anos, nativa do território e com ensino médio completo,
                    que atua na função há cerca de dois anos. Sua gestão é marcada pelo compromisso com a valorização da identidade quilombola, a defesa dos direitos
                    coletivos e a preservação das tradições culturais. Sob sua liderança, são articuladas ações voltadas à participação comunitária, à proteção do
                    território e à continuidade dos saberes ancestrais, buscando conciliar desenvolvimento social e fortalecimento cultural.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Passagem/historia/hi1.jpeg') }}">
                <img src="{{ asset('images/Passagem/historia/hi2.jpeg') }}">
                <img src="{{ asset('images/Passagem/historia/hi3.jpeg') }}">
                <img src="{{ asset('images/Passagem/historia/hi4.jpeg') }}">
                <img src="{{ asset('images/Passagem/historia/hi5.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Passagem/historia/hi1.jpeg') }}">
                <img src="{{ asset('images/Passagem/historia/hi2.jpeg') }}">
                <img src="{{ asset('images/Passagem/historia/hi3.jpeg') }}">
                <img src="{{ asset('images/Passagem/historia/hi4.jpeg') }}">
                <img src="{{ asset('images/Passagem/historia/hi5.jpeg') }}">
        
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
                <p>A cultura local da Comunidade Quilombola de Passagem de Areia se expressa de forma intensa nos festejos comunitários, considerados momentos
                    essenciais para reafirmar a memória coletiva e o sentimento de pertencimento. Entre as celebrações mais importantes estão a missa do padroeiro,
                    que reúne os moradores em torno da fé e da vida espiritual, e a cavalgada, festividade que mobiliza famílias, cavaleiros e visitantes,
                    fortalecendo os laços sociais e as tradições do meio rural.
                </p>

                <p>Entre as manifestações culturais, o reisado ocupa lugar de destaque, integrando música, canto e representações simbólicas que atravessam gerações.
                    Vivenciado como expressão de devoção, alegria e identidade quilombola, o reisado marca o ciclo festivo da comunidade e promove momentos de
                    convivência coletiva, nos quais os saberes são transmitidos por meio da oralidade e da participação comunitária.
                </p>

                <p>Além dos festejos, a atuação das parteiras também compõe o repertório cultural de Passagem de Areia, sendo reconhecida pelo cuidado, pelo
                    conhecimento tradicional e pelo papel histórico exercido na comunidade. Essas práticas revelam a força das tradições que sustentam a vida
                    comunitária e asseguram a continuidade dos valores culturais, reforçando a identidade quilombola e a preservação da memória coletiva.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Passagem/festejos/f1.jpeg') }}">
                <img src="{{ asset('images/Passagem/festejos/f2.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Passagem/festejos/f1.jpeg') }}">
                <img src="{{ asset('images/Passagem/festejos/f2.jpeg') }}">
        
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
                <p>O artesanato da Comunidade Quilombola de Passagem de Areia revela a criatividade e a habilidade manual de seus moradores,
                    especialmente das mulheres, que utilizam fibras naturais, folhas secas, palma e materiais reaproveitados para produzir flores,
                    cestos, bonecas de pano, panos bordados, peças de crochê e objetos decorativos. Cada trabalho expressa conhecimentos transmitidos entre
                    gerações e reflete a relação entre natureza, memória e identidade quilombola, mesmo sem a presença de capacitações formais estruturadas.
                </p>

                <p>As técnicas artesanais são ensinadas de geração em geração, garantindo que crianças e jovens aprendam e valorizem os modos tradicionais de produção.
                    Esse processo fortalece os laços familiares e comunitários, preserva a memória cultural do território e reafirma o artesanato como prática
                    cotidiana ligada à resistência cultural e à valorização dos saberes ancestrais.
                </p>

                <p>Além de seu valor cultural, o artesanato também desempenha papel importante na economia local, pois as peças produzidas são comercializadas
                    em feiras e eventos, contribuindo para a geração de renda e a autonomia das famílias. Mais do que simples objetos, os trabalhos manuais
                    representam orgulho, pertencimento e resistência, mantendo viva a história da comunidade e reforçando a importância de preservar essas práticas
                    para as futuras gerações.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Passagem/artesanato/a1.jpeg') }}">
                <img src="{{ asset('images/Passagem/artesanato/a2.jpeg') }}">
                <img src="{{ asset('images/Passagem/artesanato/a3.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Passagem/artesanato/a1.jpeg') }}">
                <img src="{{ asset('images/Passagem/artesanato/a2.jpeg') }}">
                <img src="{{ asset('images/Passagem/artesanato/a3.jpeg') }}">
        
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
                <p>A agricultura familiar é a base da vida na Comunidade Quilombola de Passagem de Areia, constituindo o eixo central da subsistência e
                    da organização social. Os moradores cultivam palma, mandioca, manga, caju, batata-doce, jabuticaba, hortaliças e outras frutas, garantindo
                    alimentos frescos para o consumo próprio e fortalecendo a autonomia alimentar da comunidade. Essa produção local reforça a relação direta
                    com o território e sustenta o cotidiano das famílias.
                </p>

                <p>O cultivo é realizado de forma coletiva, envolvendo pais, filhos e netos em um trabalho compartilhado que promove o aprendizado e a transmissão
                    de saberes tradicionais. As práticas agrícolas respeitam os ciclos da natureza e fortalecem os laços familiares e comunitários, configurando-se
                    como um espaço de educação cultural e valorização do conhecimento ancestral.
                </p>

                <p>Desde a formação da comunidade, a agricultura familiar molda as formas de trabalho coletivo e fortalece os vínculos de parentesco, articulando
                    território, subsistência e identidade quilombola. A partir dos alimentos cultivados, os moradores produzem doces, geleias, sorvetes de mandioca
                    e outros produtos artesanais, mantendo vivas técnicas tradicionais de preparo. Dessa forma, a agricultura familiar em Passagem de Areia se
                    consolida como prática de sustento, cultura e resistência.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Passagem/Agricultura/h1.jpeg') }}">
                <img src="{{ asset('images/Passagem/Agricultura/h2.jpeg') }}">
                <img src="{{ asset('images/Passagem/Agricultura/h3.jpeg') }}">
                <img src="{{ asset('images/Passagem/Agricultura/h4.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Passagem/Agricultura/h1.jpeg') }}">
                <img src="{{ asset('images/Passagem/Agricultura/h2.jpeg') }}">
                <img src="{{ asset('images/Passagem/Agricultura/h3.jpeg') }}">
                <img src="{{ asset('images/Passagem/Agricultura/h4.jpeg') }}">
        
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
                <p>A culinária da Comunidade Quilombola de Passagem de Areia é uma expressão direta da agricultura familiar e da ancestralidade, constituindo um
                    importante elemento da identidade cultural local. Ingredientes cultivados na própria comunidade, como palma, mandioca, manga, caju e batata-doce,
                    são transformados em pratos típicos que atravessam gerações e mantêm viva a memória coletiva. A alimentação, nesse contexto, reflete a relação
                    profunda entre território, cultura e modos tradicionais de vida.
                </p>

                <p>Entre os pratos tradicionais destacam-se o cortado de palma, a maniçoba, o chimango, a farofa de boi e a farofa de frango, todos preparados a
                    partir de técnicas e receitas transmitidas oralmente, sobretudo pelas mulheres mais velhas. Cada preparo carrega significados culturais e memórias
                    afetivas, reforçando o convívio familiar e a partilha como valores centrais da comunidade. A casa de farinha ocupa papel simbólico nesse processo,
                    sendo espaço de trabalho coletivo, cooperação e preservação cultural, onde a mandioca é transformada por meio de práticas tradicionais.
                </p>

                <p>O ato de cozinhar ocorre, frequentemente, de forma coletiva, envolvendo famílias inteiras em momentos de troca, aprendizado e celebração,
                    garantindo a transmissão dos saberes culinários às novas gerações. Mais do que sustento, a culinária em Passagem de Areia representa resistência
                    cultural e afirmação da identidade quilombola. Preservar essas receitas significa manter viva a história da comunidade, fortalecer o sentimento
                    de pertencimento e transmitir orgulho e memória às futuras gerações.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Passagem/comida/p1.jpeg') }}">
                <img src="{{ asset('images/Passagem/comida/p2.jpeg') }}">
                <img src="{{ asset('images/Passagem/comida/p3.jpeg') }}">
                <img src="{{ asset('images/Passagem/comida/p4.jpeg') }}">
                <img src="{{ asset('images/Passagem/comida/p5.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Passagem/comida/p1.jpeg') }}">
                <img src="{{ asset('images/Passagem/comida/p2.jpeg') }}">
                <img src="{{ asset('images/Passagem/comida/p3.jpeg') }}">
                <img src="{{ asset('images/Passagem/comida/p4.jpeg') }}">
                <img src="{{ asset('images/Passagem/comida/p5.jpeg') }}">
        
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
                <p>A Comunidade Quilombola de Passagem de Areia é formada por mulheres que atuam como verdadeiras guardiãs da memória, mantendo vivas as tradições,
                    os saberes e o orgulho de pertencer ao território quilombola. Por meio do artesanato, da agricultura familiar e da culinária tradicional,
                    essas mulheres transformam o cotidiano em resistência cultural, garantindo a continuidade de práticas construídas coletivamente ao longo das
                    gerações.
                </p>

                <p>Entre essas guardiãs destacam-se Fátima Maria da Silva, de 34 anos, nascida e criada na comunidade, que atua no artesanato, nos cuidados com
                    o lar e na agricultura familiar; Izabel Maria da Silva, de 65 anos, moradora desde o nascimento, cuja principal ocupação é a agricultura familiar;
                    e Zelinda Maria da Silva, de 59 anos, que dedica sua vida à lavoura e à culinária tradicional, preservando receitas e sabores que definem a
                    identidade cultural do quilombo.
                </p>

                <p>Também integra esse conjunto de saberes Maria Francisca da Silva, nascida e criada na comunidade, que desde a infância vivenciou práticas
                    tradicionais marcadas pela criatividade e simplicidade do viver quilombola. Hoje, como artesã, produz cestos e balaios, perpetuando conhecimentos
                    aprendidos e transmitidos entre gerações. A trajetória dessas mulheres revela que a verdadeira riqueza de Passagem de Areia está na memória viva,
                    na coletividade e na preservação dos saberes, que seguem fortalecendo a identidade, o orgulho e a resistência cultural da comunidade.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Passagem/guardia/g1.JPG') }}">
                <img src="{{ asset('images/Passagem/guardia/g2.JPG') }}">
                <img src="{{ asset('images/Passagem/guardia/g3.jpeg') }}">
                <img src="{{ asset('images/Passagem/guardia/g4.jpeg') }}">
                <img src="{{ asset('images/Passagem/guardia/g5.jpeg') }}">
                <img src="{{ asset('images/Passagem/guardia/g6.jpeg') }}">
                <img src="{{ asset('images/Passagem/guardia/g7.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Passagem/guardia/g1.JPG') }}">
                <img src="{{ asset('images/Passagem/guardia/g2.JPG') }}">
                <img src="{{ asset('images/Passagem/guardia/g3.jpeg') }}">
                <img src="{{ asset('images/Passagem/guardia/g4.jpeg') }}">
                <img src="{{ asset('images/Passagem/guardia/g5.jpeg') }}">
                <img src="{{ asset('images/Passagem/guardia/g6.jpeg') }}">
                <img src="{{ asset('images/Passagem/guardia/g7.jpeg') }}">
        
            </div>
        </div>
        

    </section>
</div>

@endsection
