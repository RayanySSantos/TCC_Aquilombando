@extends('layouts.comunidade')

@section('titulo', 'Quilombo Passagem de Areia')
@section('nome-comunidade', 'QUILOMBO PASSAGEM DE AREIA')
@section('fonte-quilombo', 'Quilombo Passagem de Areia')

@section('conteudo')

{{-- ===========================================================
                        HISTÓRIA
=========================================================== --}}
<div class="bloco-fundo fundo-branco">
    <section class="secao" id="historia">

        <div class="linha-principal">
            
            <div class="texto">
                <h2>📜 História</h2>
                <p>O processo de certificação quilombola da Comunidade Quilombola de Passagem de Areia, concluído <strong>em 2011</strong>, representou um marco significativo
                    em sua trajetória histórica. Conduzido pela Fundação Palmares, o reconhecimento envolveu levantamento documental,
                    relatos orais e intensa mobilização interna dos moradores. Embora fundamental para a consolidação da identidade quilombola, esse processo
                    também evidenciou divergências e tensões relacionadas ao pertencimento, às expectativas e às responsabilidades coletivas dentro da comunidade.
                </p>

                <p>Apesar dos desafios enfrentados durante a certificação, o reconhecimento oficial ampliou o acesso da comunidade a políticas públicas e contribuiu
                    para o fortalecimento da identidade quilombola no território. A certificação possibilitou maior visibilidade às demandas locais e reforçou a importância da organização coletiva como estratégia de resistência, preservação dos modos de vida e garantia de direitos históricos.
                </p>

                <p>Atualmente, a liderança comunitária é exercida por <strong>Rosângela Maria da Silva</strong>, mulher negra, católica, de 41 anos, nativa do território e com ensino médio completo,
                    que atua na função há cerca de dois anos. Sua gestão é marcada pelo compromisso com a valorização da identidade quilombola, a defesa dos direitos
                    coletivos e a preservação das tradições. Sob sua liderança, são articuladas ações voltadas à participação comunitária, à proteção do
                    território e à continuidade dos saberes ancestrais, buscando conciliar desenvolvimento social e fortalecimento comunitário.
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
                <p>No Quilombo Passagem de Areia, os festejos comunitários desempenham papel importante no cotidiano, reunindo moradores em momentos que fortalecem os vínculos e mantêm vivas as memórias compartilhadas. Entre as celebrações mais significativas estão a missa do padroeiro, que reúne a comunidade em torno da fé, e a cavalgada, que mobiliza famílias, cavaleiros e visitantes, reforçando as relações e os modos de vida do meio rural.</p>

                <p>Entre essas práticas, o reisado destaca-se como um momento de encontro que integra música, canto e representações simbólicas. Vivenciado com devoção e alegria, reúne diferentes gerações em experiências coletivas nas quais os saberes são compartilhados por meio da oralidade e da participação ativa.</p>

                <p>Outro elemento importante na vida da comunidade é a atuação das parteiras, reconhecida pelo cuidado, pelo conhecimento acumulado e pelo papel histórico que desempenham. Essas práticas evidenciam a força dos saberes que sustentam o cotidiano, garantindo sua continuidade e fortalecendo os vínculos que constituem a comunidade.</p>

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

                <p>As técnicas artesanais são transmitidas entre gerações, permitindo que crianças e jovens aprendam e valorizem os modos tradicionais de produção. Esse processo fortalece os vínculos familiares e comunitários, mantém vivas as memórias do território e garante a continuidade desses saberes no cotidiano.</p>

                <p>Além de seu valor simbólico, o artesanato também contribui para a economia local, sendo comercializado em feiras e eventos, o que possibilita a geração de renda e amplia a autonomia das famílias. Mais do que objetos, os trabalhos manuais expressam pertencimento e continuidade, mantendo viva a história da comunidade e reforçando a importância de preservar esses modos de fazer entre as gerações.</p>
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

                <p>Desde a formação da comunidade, a agricultura familiar organiza o trabalho coletivo e fortalece os vínculos de parentesco, articulando território, subsistência e modos de vida. A partir dos alimentos cultivados, os moradores produzem doces, geleias, sorvetes de mandioca e outros produtos artesanais, mantendo vivas técnicas tradicionais de preparo. Dessa maneira, a agricultura familiar em Passagem de Areia ultrapassa a função de sustento, constituindo-se como uma prática que fortalece relações, saberes e a continuidade da vida comunitária.</p>

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
                    <p>O Quilombo Passagem de Areia é formado por mulheres que atuam como verdadeiras guardiãs da memória, preservando as tradições, os saberes e o orgulho de pertencer ao território quilombola. Por meio do artesanato, da agricultura familiar e da culinária tradicional, essas mulheres transformam o cotidiano em expressão de resistência cultural, garantindo a continuidade de práticas construídas coletivamente ao longo das gerações. Entre essas guardiãs, destacam-se:</p>

                    <p>Zelinda Maria da Silva, 59 anos, mulher preta e moradora da comunidade desde o nascimento, que se dedica à agricultura familiar e à culinária tradicional (1).</p>

                    <p>Fátima Maria da Silva, 34 anos, nascida e criada na comunidade, que atua no artesanato, nos cuidados com o lar e na agricultura familiar (2).</p>

                    <p>Izabel Maria da Silva, 65 anos, moradora desde o nascimento, cuja principal atividade é a agricultura familiar (3).</p>

                    <p>Maria Francisca da Silva, 68 anos, nascida e criada na comunidade, que desde a infância vivenciou práticas tradicionais marcadas pela criatividade e simplicidade do viver quilombola, como a confecção de bonecas de sabugo de milho. Atualmente, atua como artesã, produzindo cestos e balaios, perpetuando saberes aprendidos ao longo da vida e transmitidos entre gerações. Sua trajetória evidencia a importância do conhecimento tradicional na construção da identidade cultural da comunidade (4).</p>

                    <p>Rosângela Maria da Silva, 41 anos, mulher negra, católica e nativa da Comunidade Quilombola de Passagem de Areia, exerce a liderança comunitária há cerca de dois anos. Com ensino médio completo, atua de forma comprometida na defesa dos direitos da comunidade e no fortalecimento da identidade quilombola, incentivando a valorização da cultura, da memória e do território (5).</p>

                    <p>Assim, Passagem de Areia fortalece-se como um espaço de continuidade, onde memórias, vínculos e modos de viver se entrelaçam, mantendo vivos os saberes e reafirmando as formas próprias de existência da comunidade.</p>
                                
            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens guardioes-enumeradas">

                <figure class="guardiao-item">
                    <span class="guardiao-numero">1</span>
                    <img src="{{ asset('images/Passagem/guardia/g1.JPG') }}" alt="Guardiões da memória - imagem 1">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">2</span>
                    <img src="{{ asset('images/Passagem/guardia/g2.JPG') }}" alt="Guardiões da memória - imagem 2">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">3</span>
                    <img src="{{ asset('images/Passagem/guardia/g3.jpeg') }}" alt="Guardiões da memória - imagem 3">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">4</span>
                    <img src="{{ asset('images/Passagem/guardia/g5.jpeg') }}" alt="Guardiões da memória - imagem 4">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">5</span>
                    <img src="{{ asset('images/Passagem/guardia/g8.jpeg') }}" alt="Guardiões da memória - imagem 5">
                </figure>
                

                <!-- loop -->
                <figure class="guardiao-item">
                    <span class="guardiao-numero">1</span>
                    <img src="{{ asset('images/Passagem/guardia/g1.JPG') }}" alt="Guardiões da memória - imagem 1">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">2</span>
                    <img src="{{ asset('images/Passagem/guardia/g2.JPG') }}" alt="Guardiões da memória - imagem 2">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">3</span>
                    <img src="{{ asset('images/Passagem/guardia/g3.jpeg') }}" alt="Guardiões da memória - imagem 3">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">4</span>
                    <img src="{{ asset('images/Passagem/guardia/g5.jpeg') }}" alt="Guardiões da memória - imagem 4">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">5</span>
                    <img src="{{ asset('images/Passagem/guardia/g8.jpeg') }}" alt="Guardiões da memória - imagem 5">
                </figure>

            </div>

        </div>
        

    </section>
</div>

@endsection
