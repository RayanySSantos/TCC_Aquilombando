@extends('layouts.comunidade')

@section('titulo', 'Comunidade Quilombo de Boi')
@section('nome-comunidade', 'COMUNIDADE QUILOMBO DE BOI')

@section('conteudo')

{{-- ===========================================================
                        HISTÓRIA
=========================================================== --}}
<div class="bloco-fundo fundo-branco">
    <section class="secao" id="historia">

        <div class="linha-principal">
            
            <div class="texto">
                <h2>📜 História</h2>
                <p>A Comunidade Quilombola de Boi está localizada na zona rural do município de Pindaí, Bahia, sendo formada majoritariamente por moradores
                    nativos que nasceram e cresceram no território. Sua história é marcada pela luta por autonomia, dignidade e reconhecimento, remontando à
                    trajetória de descendentes de pessoas escravizadas. Desde suas origens, a comunidade mantém vivas tradições culturais e familiares por meio da
                    agricultura, da religiosidade, da música e das festas locais, fortalecendo a memória coletiva e o sentimento de pertencimento.
                </p>

                <p>O processo de certificação como comunidade quilombola representou um marco histórico para Boi, resultado de pouco mais de um ano de intensa
                    mobilização dos moradores. A comunidade se dedicou à reunião de documentos, registros históricos e relatos orais que comprovassem sua
                    ancestralidade e formação territorial. Esse processo foi conduzido com o apoio da liderança local, exercida por Edmilson Moreira Santos,
                    cuja atuação foi fundamental na organização interna, na mediação com instituições públicas e no fortalecimento da identidade quilombola.
                </p>

                <p>A certificação oficial concedida pela Fundação Palmares, em 03 de fevereiro de 2017, consolidou o reconhecimento institucional
                    da comunidade e ampliou o acesso a políticas públicas e programas de desenvolvimento rural e social. A partir desse reconhecimento, a
                    comunidade de Boi fortaleceu iniciativas voltadas à valorização cultural, à agricultura familiar e à preservação dos saberes tradicionais.
                    O termo “negos do Boi”, antes utilizado de forma preconceituosa, foi ressignificado como símbolo de resistência, orgulho e afirmação identitária.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Boi/historia/hi1.jpeg') }}">
                <img src="{{ asset('images/Boi/historia/hi2.jpeg') }}">
                <img src="{{ asset('images/Boi/historia/hi3.png') }}">
                <img src="{{ asset('images/Boi/historia/hi4.png') }}">
                <img src="{{ asset('images/Boi/historia/hi5.png') }}">
                <img src="{{ asset('images/Boi/historia/hi6.png') }}">
                <img src="{{ asset('images/Boi/historia/hi7.png') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Boi/historia/hi1.jpeg') }}">
                <img src="{{ asset('images/Boi/historia/hi2.jpeg') }}">
                <img src="{{ asset('images/Boi/historia/hi3.png') }}">
                <img src="{{ asset('images/Boi/historia/hi4.png') }}">
                <img src="{{ asset('images/Boi/historia/hi5.png') }}">
                <img src="{{ asset('images/Boi/historia/hi6.png') }}">
                <img src="{{ asset('images/Boi/historia/hi7.png') }}">
        
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
                <p>Os festejos ocupam um lugar central na vida comunitária da Comunidade Quilombola de Boi, funcionando como momentos de celebração da história,
                    da cultura e do pertencimento coletivo. O Festival Quilombola destaca-se como um evento importante, no qual os moradores reafirmam valores,
                    práticas e memórias que unem diferentes gerações e evidenciam a diversidade cultural presente no território.
                </p>

                <p>Além do festival, as manifestações culturais se expressam por meio de festejos tradicionais que fortalecem os vínculos sociais e preservam a
                    memória coletiva. Entre essas celebrações estão a Festa de Reis, as festas juninas, os encontros religiosos e outros momentos comemorativos
                    que reúnem famílias e reforçam o sentimento de pertencimento ao território quilombola. Esses eventos atuam como espaços de transmissão cultural,
                    nos quais os saberes e tradições são compartilhados de forma coletiva.
                </p>

                <p>Entre as expressões culturais, destaca-se a dança de roda, prática transmitida entre gerações que reúne os moradores em torno da música,
                    do canto e do movimento circular, simbolizando união, espiritualidade e continuidade cultural. Os festejos em Boi constituem espaços de convivência,
                    troca de saberes e reafirmação da identidade quilombola, expressando resistência, vitalidade e a riqueza cultural que sustentam o modo de vida
                    da comunidade.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Boi/festejos/f1.jpg') }}">
                <img src="{{ asset('images/Boi/festejos/f2.jpg') }}">
                <img src="{{ asset('images/Boi/festejos/f3.jpeg') }}">
                <img src="{{ asset('images/Boi/festejos/f4.jpg') }}">
                <img src="{{ asset('images/Boi/festejos/f5.jpeg') }}">
                <img src="{{ asset('images/Boi/festejos/f6.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Boi/festejos/f1.jpg') }}">
                <img src="{{ asset('images/Boi/festejos/f2.jpg') }}">
                <img src="{{ asset('images/Boi/festejos/f3.jpeg') }}">
                <img src="{{ asset('images/Boi/festejos/f4.jpg') }}">
                <img src="{{ asset('images/Boi/festejos/f5.jpeg') }}">
                <img src="{{ asset('images/Boi/festejos/f6.jpeg') }}">
        
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
                <p>No cotidiano da Comunidade Quilombola de Boi, o artesanato manifesta-se como expressão de sustentabilidade, criatividade e preservação dos
                    saberes tradicionais. Utilizando materiais naturais e técnicas ancestrais transmitidas ao longo das gerações, as mulheres, principais
                    guardiãs desse conhecimento, produzem cestos, flores de bananeira, bonecas de pano, pinturas e outras peças que revelam profundo vínculo
                    com os recursos locais e com a história da comunidade. O uso da fibra da bananeira, de folhas secas e de materiais reaproveitados demonstra
                    habilidade manual e respeito ao meio ambiente.
                </p>

                <p>As técnicas artesanais são ensinadas de geração em geração, fortalecendo os laços familiares e comunitários e garantindo a continuidade das
                    práticas ancestrais. O aprendizado ocorre de forma coletiva, permitindo que crianças e jovens conheçam e valorizem os modos tradicionais de
                    produção. Dessa forma, o artesanato integra cultura, arte e identidade, reafirmando o pertencimento quilombola e a valorização da memória coletiva.
                </p>

                <p>Além de seu valor cultural e simbólico, o artesanato desempenha função econômica relevante, pois muitas peças são comercializadas em feiras e
                    eventos locais, contribuindo para a geração de renda e a sustentabilidade da comunidade. Mais do than simples objetos, os trabalhos manuais
                    representam resistência cultural, orgulho e continuidade das tradições, mantendo viva a história e fortalecendo a identidade quilombola da
                    Comunidade de Boi.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Boi/artesanato/a1.jpeg') }}">
                <img src="{{ asset('images/Boi/artesanato/a2.jpeg') }}">
                <img src="{{ asset('images/Boi/artesanato/a3.jpeg') }}">
                <img src="{{ asset('images/Boi/artesanato/a4.jpeg') }}">
                <img src="{{ asset('images/Boi/artesanato/a5.jpeg') }}">
                <img src="{{ asset('images/Boi/artesanato/a6.jpeg') }}">
                <img src="{{ asset('images/Boi/artesanato/a7.jpg') }}">
                <img src="{{ asset('images/Boi/artesanato/a8.jpg') }}">
                <img src="{{ asset('images/Boi/artesanato/a9.jpeg') }}">
                <img src="{{ asset('images/Boi/artesanato/a10.jpeg') }}">
                <img src="{{ asset('images/Boi/artesanato/a11.jpeg') }}">
                <img src="{{ asset('images/Boi/artesanato/a12.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Boi/artesanato/a1.jpeg') }}">
                <img src="{{ asset('images/Boi/artesanato/a2.jpeg') }}">
                <img src="{{ asset('images/Boi/artesanato/a3.jpeg') }}">
                <img src="{{ asset('images/Boi/artesanato/a4.jpeg') }}">
                <img src="{{ asset('images/Boi/artesanato/a5.jpeg') }}">
                <img src="{{ asset('images/Boi/artesanato/a6.jpeg') }}">
                <img src="{{ asset('images/Boi/artesanato/a7.jpg') }}">
                <img src="{{ asset('images/Boi/artesanato/a8.jpg') }}">
                <img src="{{ asset('images/Boi/artesanato/a9.jpeg') }}">
                <img src="{{ asset('images/Boi/artesanato/a10.jpeg') }}">
                <img src="{{ asset('images/Boi/artesanato/a11.jpeg') }}">
                <img src="{{ asset('images/Boi/artesanato/a12.jpeg') }}">
        
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
                <p>A agricultura familiar é a base da vida cotidiana na Comunidade Quilombola de Boi, estruturando o modo de vida e a organização social local.
                    Os moradores cultivam milho, feijão, mandioca, maxixe, coco, frutas e hortaliças em pequenos roçados próximos às casas, garantindo alimento
                    fresco e fortalecendo a autonomia alimentar. Essas práticas seguem métodos tradicionais e sustentáveis, respeitando os ciclos naturais e mantendo
                    a relação direta da comunidade com a terra.
                </p>

                <p>O cultivo é realizado de forma coletiva, envolvendo pais, filhos e netos em um trabalho compartilhado que promove a transmissão de conhecimentos
                    e o fortalecimento dos vínculos familiares. A convivência diária com a terra possibilita que os mais jovens aprendam sobre cuidados ambientais,
                    preservação cultural e responsabilidade com o território, assegurando a continuidade dos saberes agrícolas tradicionais.
                </p>

                <p>Além de garantir o sustento das famílias, a produção agrícola permite a comercialização do excedente em feiras e mercados locais, contribuindo
                    para a geração de renda e a autonomia financeira da comunidade. Essa relação com a terra reforça o sentimento de pertencimento ao território e
                    a identidade quilombola, demonstrando que a agricultura familiar em Boi é, ao mesmo tempo, fonte de sustento, prática cultural e expressão de
                    resistência.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Boi/Agricultura/h1.jpg') }}">
                <img src="{{ asset('images/Boi/Agricultura/h2.jpeg') }}">
                <img src="{{ asset('images/Boi/Agricultura/h3.jpeg') }}">
                <img src="{{ asset('images/Boi/Agricultura/h4.jpeg') }}">
                <img src="{{ asset('images/Boi/Agricultura/h5.jpeg') }}">
                <img src="{{ asset('images/Boi/Agricultura/h6.jpg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Boi/Agricultura/h1.jpg') }}">
                <img src="{{ asset('images/Boi/Agricultura/h2.jpeg') }}">
                <img src="{{ asset('images/Boi/Agricultura/h3.jpeg') }}">
                <img src="{{ asset('images/Boi/Agricultura/h4.jpeg') }}">
                <img src="{{ asset('images/Boi/Agricultura/h5.jpeg') }}">
                <img src="{{ asset('images/Boi/Agricultura/h6.jpg') }}">
        
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
                <p>A culinária da Comunidade Quilombola de Boi ocupa um lugar central na vida comunitária, refletindo a ancestralidade e a forte ligação com
                    a agricultura familiar. Os ingredientes cultivados localmente são transformados em receitas que atravessam gerações, fortalecendo os vínculos
                    familiares e reafirmando a identidade cultural do território. A alimentação é compreendida como patrimônio cultural e elemento de afirmação
                    identitária, conectando práticas produtivas, memória e modos de vida tradicionais.
                </p>

                <p>Entre os pratos mais tradicionais destacam-se a feijoada, o doce de umbu, o bolo de milho e o picado de palma, preparados a partir de técnicas
                    transmitidas oralmente, sobretudo pelas mulheres mais velhas da comunidade. Cada receita carrega sabores, modos de preparo e significados
                    culturais que reforçam o sentimento de pertencimento e a continuidade histórica. A preparação dos alimentos ocorre, muitas vezes, de forma
                    coletiva, em encontros familiares e celebrações, tornando a cozinha um espaço de aprendizado e partilha.
                </p>

                <p>Mais do que nutrir, a culinária em Boi simboliza resistência cultural e preservação da memória dos antepassados. A comunidade reconhece a
                    importância de valorizar e divulgar esses saberes, bem como de incentivar iniciativas que possibilitem a geração de renda a partir da produção
                    de alimentos tradicionais. Assim, a culinária representa um elo de continuidade cultural que conecta passado, presente e futuro, garantindo que
                    os conhecimentos ancestrais permaneçam vivos e fortalecidos.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Boi/comida/p1.jpeg') }}">
                <img src="{{ asset('images/Boi/comida/p2.jpeg') }}">
                <img src="{{ asset('images/Boi/comida/p3.jpeg') }}">
                <img src="{{ asset('images/Boi/comida/p4.jpeg') }}">
                <img src="{{ asset('images/Boi/comida/p5.jpeg') }}">
                <img src="{{ asset('images/Boi/comida/p6.jpeg') }}">
                <img src="{{ asset('images/Boi/comida/p7.jpeg') }}">
                <img src="{{ asset('images/Boi/comida/p8.jpeg') }}">
                <img src="{{ asset('images/Boi/comida/p9.jpeg') }}">
                <img src="{{ asset('images/Boi/comida/p10.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Boi/comida/p1.jpeg') }}">
                <img src="{{ asset('images/Boi/comida/p2.jpeg') }}">
                <img src="{{ asset('images/Boi/comida/p3.jpeg') }}">
                <img src="{{ asset('images/Boi/comida/p4.jpeg') }}">
                <img src="{{ asset('images/Boi/comida/p5.jpeg') }}">
                <img src="{{ asset('images/Boi/comida/p6.jpeg') }}">
                <img src="{{ asset('images/Boi/comida/p7.jpeg') }}">
                <img src="{{ asset('images/Boi/comida/p8.jpeg') }}">
                <img src="{{ asset('images/Boi/comida/p9.jpeg') }}">
                <img src="{{ asset('images/Boi/comida/p10.jpeg') }}">
        
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
                <p>A Comunidade Quilombola de Boi é formada por homens e mulheres que atuam como verdadeiros guardiões da memória, da cultura e dos saberes
                    ancestrais do território. No cotidiano, essas pessoas assumem a responsabilidade de preservar e transmitir práticas tradicionais ligadas à
                    agricultura, ao artesanato, à culinária e às manifestações culturais, garantindo a continuidade da identidade quilombola. Cada participante
                    da pesquisa contribuiu de forma singular para registrar e valorizar esses conhecimentos, evidenciando o papel fundamental dos indivíduos
                    comprometidos com a memória coletiva.
                </p>

                <p>Entre esses guardiões destacam-se Alessandra Pereira de Souza Moreira, de 38 anos, moradora nativa da comunidade, que atua na agricultura,
                    no artesanato e preserva os saberes culinários tradicionais; Lidinalva Rodrigues dos Santos Souza, de 42 anos, residente há cerca de cinco anos,
                    dedicada à agricultura familiar; e Lindauva Moraes Rodrigues, de 53 anos, agricultora familiar que vive há mais de três décadas na comunidade,
                    contribuindo para a manutenção do modo de vida tradicional e dos saberes ligados à terra.
                </p>

                <p>Também exercem papel importante na preservação cultural Angelica Lima Alves Santana, de 29 anos, que mantém viva a tradição artesanal por meio
                    do crochê e da confecção de chapéus com fibra de bananeira; Marlene Neves dos Santos de Jesus, de 44 anos, dedicada à produção de flores e cestas
                    com palha de milho; e Nelso Lima Neves Santana, de 78 anos, participante ativo do reisado, tocando e cantando. Juntos, esses moradores asseguram
                    que os saberes, a música, o trabalho e a fé continuem sendo transmitidos às novas gerações, fortalecendo a identidade quilombola da Comunidade de Boi.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Boi/guardia/g1.jpeg') }}">
                <img src="{{ asset('images/Boi/guardia/g2.jpeg') }}">
                <img src="{{ asset('images/Boi/guardia/g3.jpeg') }}">
                <img src="{{ asset('images/Boi/guardia/g4.jpeg') }}">
                <img src="{{ asset('images/Boi/guardia/g5.jpeg') }}">
                <img src="{{ asset('images/Boi/guardia/g6.jpeg') }}">
                <img src="{{ asset('images/Boi/guardia/g7.jpeg') }}">
                <img src="{{ asset('images/Boi/guardia/g8.jpeg') }}">
                <img src="{{ asset('images/Boi/guardia/g9.jpeg') }}">
                <img src="{{ asset('images/Boi/guardia/g10.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Boi/guardia/g1.jpeg') }}">
                <img src="{{ asset('images/Boi/guardia/g2.jpeg') }}">
                <img src="{{ asset('images/Boi/guardia/g3.jpeg') }}">
                <img src="{{ asset('images/Boi/guardia/g4.jpeg') }}">
                <img src="{{ asset('images/Boi/guardia/g5.jpeg') }}">
                <img src="{{ asset('images/Boi/guardia/g6.jpeg') }}">
                <img src="{{ asset('images/Boi/guardia/g7.jpeg') }}">
                <img src="{{ asset('images/Boi/guardia/g8.jpeg') }}">
                <img src="{{ asset('images/Boi/guardia/g9.jpeg') }}">
                <img src="{{ asset('images/Boi/guardia/g10.jpeg') }}">
        
            </div>
        </div>        

    </section>
</div>

@endsection
