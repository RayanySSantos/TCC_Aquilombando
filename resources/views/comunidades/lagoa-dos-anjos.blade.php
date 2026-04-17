@extends('layouts.comunidade')

@section('titulo', 'Quilombo Lagoa dos Anjos')
@section('nome-comunidade', 'QUILOMBO LAGOA DOS ANJOS')
@section('fonte-quilombo', 'Quilombo Lagoa dos Anjos')

@section('conteudo')

{{-- ===========================================================
                        HISTÓRIA
=========================================================== --}}
<div class="bloco-fundo fundo-branco">
    <section class="secao" id="historia">

        <div class="linha-principal">
            
            <div class="texto">
                <h2>📜 História</h2>
                <p>A Comunidade Quilombola de Lagoa dos Anjos, localizada no município de Candiba, Bahia, possui uma trajetória marcada pela união e pela luta
                    coletiva de seus moradores. A origem de sua história remonta aos primeiros habitantes que, movidos pelo espírito solidário, doaram terrenos
                    para a construção dos salões comunitários. Esses espaços tornaram-se fundamentais para encontros, celebrações e momentos de fortalecimento social,
                    garantindo que a vida comunitária fosse pautada pela coletividade, pelo respeito mútuo e pela preservação das tradições.
                </p>

                <p>O reconhecimento oficial da comunidade como quilombo foi resultado de intensa mobilização interna. Dois sobrinhos desempenharam papel essencial
                    nesse processo, estimulando a participação dos moradores e a busca pelos direitos coletivos. Esse esforço culminou, em 2011, na certificação
                    concedida pela Fundação Palmares, marco histórico que consolidou a identidade quilombola de Lagoa dos Anjos e ampliou o acesso
                    a políticas públicas e projetos voltados ao fortalecimento da comunidade.
                </p>

                <p>Nesse contexto, a liderança comunitária teve papel decisivo, destacando-se a atuação de Luciene Alves Santos Silva, que por anos esteve à
                    frente das iniciativas locais, articulando apoios e buscando recursos que resultaram em melhorias na infraestrutura e na valorização cultural.
                    Atualmente, a liderança é exercida por Jorge Alto dos Santos, que dá continuidade a esse legado, trabalhando para manter vivas as tradições e
                    assegurar que as novas gerações compreendam a importância da história, da resistência e da identidade quilombola de Lagoa dos Anjos.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Lagoa dos Anjos/historia/hi1.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/historia/hi2.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Lagoa dos Anjos/historia/hi1.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/historia/hi2.jpeg') }}">
        
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
                <p>As manifestações culturais ocupam lugar central na vida comunitária da Comunidade Quilombola de Lagoa dos Anjos, fortalecendo o sentimento
                    de pertencimento e a memória coletiva. Entre os festejos, destaca-se o Reisado, uma das expressões culturais mais significativas da comunidade,
                    que reúne moradores de diferentes idades em cortejos marcados por cantos, danças e instrumentos musicais.
                </p>

                <p>O Reisado é vivenciado como um momento de devoção, alegria e encontro coletivo, indo além do caráter religioso. A celebração promove a união
                    comunitária e reafirma a identidade quilombola, criando espaços de convivência em que a história, a fé e a cultura se entrelaçam. Por meio da
                    música e da dança, os moradores mantêm vivas tradições que atravessam gerações.
                </p>

                <p>Transmitido de geração em geração, o Reisado simboliza continuidade cultural e resistência histórica, fortalecendo os laços sociais e a
                    ligação da comunidade com suas raízes culturais e espirituais. Essa manifestação assegura a preservação da memória coletiva e reafirma o
                    papel das práticas culturais como elementos centrais na identidade quilombola de Lagoa dos Anjos.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Lagoa dos Anjos/festejos/f1.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/festejos/f2.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/festejos/f3.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Lagoa dos Anjos/festejos/f1.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/festejos/f2.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/festejos/f3.jpeg') }}">
        
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
                <p>O artesanato da Comunidade Quilombola de Lagoa dos Anjos constitui uma das expressões mais autênticas da criatividade, da resistência cultural
                    e dos saberes manuais preservados pelos moradores. Entre os principais trabalhos produzidos estão toucas, peças de crochê confeccionadas com
                    linha de algodão, panos elaborados a partir de retalhos, bolsas, colheres de pau e pilões de madeira. Cada objeto carrega significados simbólicos
                    e memória coletiva, reafirmando o artesanato como prática cultural ligada à identidade quilombola e à permanência no território.
                </p>

                <p>As técnicas artesanais são transmitidas de geração em geração, com destaque para o papel central das mulheres, que atuam como guardiãs desses
                    conhecimentos e responsáveis por ensinar os modos tradicionais de produção. O aprendizado ocorre, em grande parte, em momentos coletivos,
                    como rodas de conversa e atividades compartilhadas, fortalecendo os vínculos familiares e comunitários e garantindo a continuidade dos saberes
                    ancestrais.
                </p>

                <p>Além de seu valor cultural, o artesanato desempenha função econômica relevante, pois as peças produzidas são comercializadas em feiras, eventos
                    e encontros comunitários, contribuindo para a complementação da renda das famílias e para o fortalecimento da autonomia econômica. Preservar o
                    artesanato significa, assim, preservar a memória e a identidade da comunidade, assegurando que as futuras gerações conheçam, valorizem e deem
                    continuidade ao legado cultural de Lagoa dos Anjos.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Lagoa dos Anjos/artesanato/a1.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/artesanato/a2.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/artesanato/a3.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Lagoa dos Anjos/artesanato/a1.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/artesanato/a2.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/artesanato/a3.jpeg') }}">
        
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
                <p>A agricultura familiar constitui a base econômica e social da Comunidade Quilombola de Lagoa dos Anjos, sendo fundamental para a subsistência
                    das famílias e para a organização comunitária. Os moradores cultivam a terra de forma coletiva e sustentável, produzindo alimentos como feijão,
                    milho, batata-doce, hortaliças e frutas variadas, entre elas manga, limão, laranja, mamão, acerola, tangerina, pitanga, coco e amora.
                    Essa produção garante a segurança alimentar e fortalece os vínculos da comunidade com o território.
                </p>

                <p>O modelo de produção adotado reflete o compromisso com práticas que respeitam a natureza e preservam o equilíbrio ambiental. Além dos alimentos,
                    são cultivadas ervas medicinais utilizadas no cuidado tradicional com a saúde, evidenciando a valorização da biodiversidade local e da sabedoria
                    ancestral transmitida entre gerações. A terra é compreendida como fonte de vida e deve ser cuidada de forma responsável, reforçando a relação de
                    respeito entre comunidade e natureza.
                </p>

                <p>A agricultura em Lagoa dos Anjos também se configura como espaço de aprendizado e construção coletiva, envolvendo pais, filhos e netos no cultivo
                    da terra. Esse trabalho conjunto assegura a transmissão de técnicas agrícolas e saberes tradicionais, fortalece os laços familiares e possibilita
                    a comercialização do excedente em feiras e mercados locais, contribuindo para a geração de renda e a autonomia econômica. Dessa forma,
                    a agricultura familiar se consolida como prática de sustento, cultura e resistência quilombola.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Lagoa dos Anjos/Agricultura/h1.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/Agricultura/h2.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/Agricultura/h3.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/Agricultura/h4.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Lagoa dos Anjos/Agricultura/h1.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/Agricultura/h2.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/Agricultura/h3.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/Agricultura/h4.jpeg') }}">
        
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
                <p>A culinária da Comunidade Quilombola de Lagoa dos Anjos constitui uma expressão viva de sua cultura e de sua relação histórica com o território.
                    Os alimentos cultivados na agricultura familiar, como frutas, raízes, hortaliças e grãos, compõem a base das receitas tradicionais e revelam a
                    profunda ligação entre a terra e a mesa. A alimentação, nesse contexto, ultrapassa a subsistência e se configura como elemento central da
                    identidade cultural e da memória coletiva da comunidade.
                </p>

                <p>Entre os pratos mais apreciados estão a paçoca de gergelim, o pirão, o frango caipira, a paçoca de coco com rapadura, o chá de “bicha”,
                    a paçoca de carne seca e o bolo frito. Essas receitas são transmitidas de geração em geração, principalmente pelas mulheres mais velhas,
                    e carregam memórias afetivas que reforçam o convívio familiar e a prática da partilha nos lares quilombolas. Cada preparo representa um gesto
                    de valorização da tradição, da ancestralidade e do conhecimento oral.
                </p>

                <p>A culinária em Lagoa dos Anjos vai além de sua função nutricional, assumindo o papel de resistência e afirmação cultural. Cozinhar é também um
                    ato de celebração da vida comunitária, pois os alimentos preparados em família fortalecem os vínculos sociais e mantêm vivos os saberes
                    tradicionais. Dessa forma, a culinária permanece como símbolo de orgulho, pertencimento e continuidade do legado cultural quilombola, sendo
                    transmitida às novas gerações como patrimônio vivo da comunidade.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Lagoa dos Anjos/comida/p1.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/comida/p2.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/comida/p3.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/comida/p4.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/comida/p5.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/comida/p6.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Lagoa dos Anjos/comida/p1.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/comida/p2.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/comida/p3.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/comida/p4.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/comida/p5.jpeg') }}">
                <img src="{{ asset('images/Lagoa dos Anjos/comida/p6.jpeg') }}">
        
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
                <p>Os moradores da Comunidade Quilombola de Lagoa dos Anjos são verdadeiros guardiões da história, da memória e das tradições do quilombo. Por meio da agricultura familiar, da culinária, do artesanato e de manifestações culturais, como o reisado, cada pessoa contribui para a preservação da identidade coletiva. Entre esses guardiões destacam-se (1) Claudivino Moreira Trindade, 61 anos, morador desde o nascimento, que atua na agricultura familiar, contribuindo para a continuidade das práticas tradicionais de cultivo; (2) João Alves dos Santos, 54 anos, professor e agricultor, que teve papel decisivo na certificação do quilombo, organizando acervos que comprovam a ancestralidade da comunidade; e (3) Judite Gonçalves de Amaral, que há mais de 35 anos se dedica ao artesanato, produzindo tapetes, bordados e ponto de cruz a partir de retalhos, preservando a tradição manual local.</p>

                <p>Também se destacam (4) Madalena Correia, 66 anos, que aprendeu o artesanato com a mãe ainda na infância e produz peças como tapetes, toucas e turbantes, valorizando o reaproveitamento de materiais; (5) Manoel Alves dos Santos, 58 anos, agricultor familiar e participante ativo do reisado, contribuindo para a manutenção das tradições culturais; e (6) Joana da Silva Santos, 59 anos, moradora desde o nascimento, que se dedica às práticas tradicionais, fortalecendo os saberes ancestrais da comunidade.</p>

                <p>Somam-se a esses guardiões da memória (7) Lucilene Alves dos Santos Silva, 52 anos, lavradora que preserva as tradições da agricultura local; (8) Luciene Alves Santos Silva (Tia Iyô), 51 anos, que alia o trabalho na lavoura ao gosto pela culinária quilombola, reconhecendo-a como um importante resgate da memória ancestral; e (9) Izabel Rosa de Jesus, 58 anos, que herdou da mãe e das avós o talento culinário, preservando receitas tradicionais como a paçoca de carne seca. Assim, Lagoa dos Anjos se consolida como um território de resistência cultural, onde saberes, práticas e vivências são continuamente compartilhados, garantindo a preservação da identidade quilombola para as futuras gerações.</p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens guardioes-enumeradas">

                <figure class="guardiao-item">
                    <span class="guardiao-numero">1</span>
                    <img src="{{ asset('images/Lagoa dos Anjos/guardia/g1.jpeg') }}" alt="Guardiões da memória - imagem 1">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">2</span>
                    <img src="{{ asset('images/Lagoa dos Anjos/guardia/g4.jpeg') }}" alt="Guardiões da memória - imagem 2">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">3</span>
                    <img src="{{ asset('images/Lagoa dos Anjos/guardia/g5.jpeg') }}" alt="Guardiões da memória - imagem 3">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">4</span>
                    <img src="{{ asset('images/Lagoa dos Anjos/guardia/g7.jpeg') }}" alt="Guardiões da memória - imagem 4">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">5</span>
                    <img src="{{ asset('images/Lagoa dos Anjos/guardia/g8.jpeg') }}" alt="Guardiões da memória - imagem 5">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">6</span>
                    <img src="{{ asset('images/Lagoa dos Anjos/guardia/g9.jpeg') }}" alt="Guardiões da memória - imagem 6">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">7</span>
                    <img src="{{ asset('images/Lagoa dos Anjos/guardia/g10.jpeg') }}" alt="Guardiões da memória - imagem 7">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">8</span>
                    <img src="{{ asset('images/Lagoa dos Anjos/guardia/g11.jpg') }}" alt="Guardiões da memória - imagem 8">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">9</span>
                    <img src="{{ asset('images/Lagoa dos Anjos/guardia/g12.jpg') }}" alt="Guardiões da memória - imagem 9">
                </figure>

                <!-- loop -->
                <figure class="guardiao-item">
                    <span class="guardiao-numero">1</span>
                    <img src="{{ asset('images/Lagoa dos Anjos/guardia/g1.jpeg') }}" alt="Guardiões da memória - imagem 1">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">2</span>
                    <img src="{{ asset('images/Lagoa dos Anjos/guardia/g4.jpeg') }}" alt="Guardiões da memória - imagem 2">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">3</span>
                    <img src="{{ asset('images/Lagoa dos Anjos/guardia/g5.jpeg') }}" alt="Guardiões da memória - imagem 3">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">4</span>
                    <img src="{{ asset('images/Lagoa dos Anjos/guardia/g7.jpeg') }}" alt="Guardiões da memória - imagem 4">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">5</span>
                    <img src="{{ asset('images/Lagoa dos Anjos/guardia/g8.jpeg') }}" alt="Guardiões da memória - imagem 5">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">6</span>
                    <img src="{{ asset('images/Lagoa dos Anjos/guardia/g9.jpeg') }}" alt="Guardiões da memória - imagem 6">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">7</span>
                    <img src="{{ asset('images/Lagoa dos Anjos/guardia/g10.jpeg') }}" alt="Guardiões da memória - imagem 7">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">8</span>
                    <img src="{{ asset('images/Lagoa dos Anjos/guardia/g11.jpg') }}" alt="Guardiões da memória - imagem 8">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">9</span>
                    <img src="{{ asset('images/Lagoa dos Anjos/guardia/g12.jpg') }}" alt="Guardiões da memória - imagem 9">
                </figure>

            </div>

        </div>
        

    </section>
</div>

@endsection
