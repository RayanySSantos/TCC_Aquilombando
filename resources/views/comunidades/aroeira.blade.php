@extends('layouts.comunidade')

@section('titulo', 'Quilombo Aroeira')
@section('nome-comunidade', 'QUILOMBO AROEIRA')
@section('fonte-quilombo', 'Quilombo Aroeira')

@section('conteudo')

{{-- ===========================================================
                        HISTÓRIA
=========================================================== --}}
<div class="bloco-fundo fundo-branco">
    <section class="secao" id="historia">

        <div class="linha-principal">
            
            <div class="texto">
                <h2>📜 História</h2>
                <p>O Quilombo Aroeira está localizado na zona rural do município de Palmas de Monte Alto, Bahia, e tem suas origens ligadas à história de Vitor Brito,
                    um homem livre que foi escravizado e posteriormente recebeu sua carta de alforria. Seu legado se espalhou por diversos quilombos nos territórios
                    do Sertão Produtivo e do Velho Chico, deixando marcas profundas na formação histórica e na identidade quilombola da região. Essa trajetória de
                    resistência e luta constitui a base da memória coletiva que sustenta a Comunidade Quilombola de Aroeira.
                </p>

                <p>Em Aroeira, a matriarca <strong>Dona Maria da Conceição dos Santos</strong>, tataraneta de Vitor Brito, exerce papel fundamental na preservação da história e das tradições locais Com 72 anos de idade e cerca de cinquenta anos vivendo no quilombo, ela mantém viva a herança
                    de seus antepassados. Aprendeu a cozinhar com a avó e a mãe, preservando receitas transmitidas ao longo das gerações, que simbolizam a memória,
                    a resistência e o pertencimento do seu povo. Além do trabalho com a terra, dedica-se ao artesanato, transformando em arte os saberes herdados das
                    mulheres de sua família.
                </p>

                <p>Essa trajetória contribuiu para que, em <strong>02 de abril de 2016</strong>, a comunidade obtivesse a certificação da Fundação Cultural Palmares, fortalecendo seus vínculos com o território e ampliando a visibilidade de seus modos de vida e saberes.
                    Atualmente, a liderança da comunidade é exercida por <strong>Nelci Conceição dos Santos</strong>, nascida no próprio quilombo e com 46 anos de idade,
                    que atua na defesa dos direitos da população local e na articulação de projetos voltados à valorização cultural. Sua atuação reforça a
                    força das mulheres quilombolas e a luta contínua para manter viva a história, os valores e a identidade do Quilombo Aroeira.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Aroeira/historia/hi1.jpeg') }}">
                <img src="{{ asset('images/Aroeira/historia/hi2.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Aroeira/historia/hi1.jpeg') }}">
                <img src="{{ asset('images/Aroeira/historia/hi2.jpeg') }}">
        
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
                <p>
                A Comunidade Quilombola de Aroeira mantém vivas diversas práticas que fortalecem os vínculos comunitários e atualizam as memórias partilhadas. Entre elas, destacam-se o reisado, o samba de roda, as festas de São João, o Natal e a celebração de Santa Luzia, além de costumes familiares transmitidos pela oralidade. Esses momentos reúnem moradores de diferentes gerações em vivências marcadas pela fé, pela música, pela dança e pela convivência, mantendo em circulação saberes e valores que atravessam a história da comunidade.
                </p>

                <p>
                As celebrações desempenham papel central na transmissão dos saberes ancestrais, permitindo que crianças, jovens e adultos compartilhem experiências e aprendizados construídos ao longo do tempo. Por meio dessas práticas culturais, a comunidade mantém viva a religiosidade, a oralidade e os costumes herdados dos antepassados, garantindo que a memória coletiva continue sendo reconhecida e valorizada no cotidiano.
                </p>

                <p>
                O reisado, em especial, ocupa lugar de destaque na identidade cultural de Aroeira, sendo vivenciado como expressão de devoção, alegria e resistência. Essas manifestações culturais asseguram a continuidade das tradições e reforçam o sentimento de pertencimento ao território quilombola, mantendo viva a história, os saberes e a identidade da comunidade para o presente e para as futuras gerações.
                </p>

                <p>
                Nas celebrações da comunidade, os instrumentos musicais assumem papel fundamental, pois, além de conduzirem o ritmo das festividades, são portadores de memórias e valores herdados dos ancestrais. A sanfona, com seu som marcante, acompanha danças e cantos, criando um ambiente de alegria, encontro e coletividade. O bumba dos reis, por sua vez, imprime força e cadência ao reisado, orientando os versos e transformando a celebração em um momento de espiritualidade, resistência cultural e pertencimento.
                </p>

                <p>
                O tamborim artesanal, também conhecido em algumas tradições como caixa de folia, é presença constante nas festas populares, especialmente no reisado e nas folias de reis. Suas batidas ritmadas marcam o compasso das músicas e reforçam a energia coletiva do ritual. Assim, cada instrumento, seja de corda, sopro ou percussão, ultrapassa a função sonora e se afirma como símbolo de continuidade cultural, elo entre gerações e elemento essencial para o fortalecimento da identidade da comunidade. Nesse contexto, destaca-se Seu Júlio, que apresenta e toca instrumentos tradicionais utilizados nas celebrações do quilombo Aroeira, como o bumba dos reis, a sanfona e o tamborim, contribuindo para a preservação e transmissão desses saberes culturais.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Aroeira/festejos/f1.png') }}">
                <img src="{{ asset('images/Aroeira/festejos/f2.png') }}">
                <img src="{{ asset('images/Aroeira/festejos/f3.png') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Aroeira/festejos/f1.png') }}">
                <img src="{{ asset('images/Aroeira/festejos/f2.png') }}">
                <img src="{{ asset('images/Aroeira/festejos/f3.png') }}">
        
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
                O artesanato do Quilombo Aroeira expressa criatividade, memória e saberes herdados, materializados em peças como tapetes, flores, cestos confeccionados com fibra de bananeira e trabalhos em crochê feitos com linha fiada no fuso de algodão. Produzidas a partir de técnicas tradicionais, essas criações revelam o conhecimento das mulheres da comunidade e mantêm em circulação modos de fazer transmitidos entre gerações.
                </p>

                <p>
                Esse aprendizado ocorre, sobretudo, no âmbito familiar, onde as mulheres desempenham papel central na partilha e continuidade desses saberes. Assim, o artesanato se constitui como um elo entre gerações, fortalecendo vínculos e assegurando que esses conhecimentos permaneçam presentes no cotidiano da comunidade.
                </p>

                <p>
                Para além de seu valor simbólico, o artesanato também contribui para a economia local, sendo comercializado em feiras e eventos, o que complementa a renda das famílias e amplia sua autonomia. Dessa forma, mais do que uma atividade produtiva, ele se consolida como uma prática que fortalece pertencimentos, valoriza memórias e garante a continuidade dos modos de fazer da comunidade.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Aroeira/artesanato/a1.jpeg') }}">
                <img src="{{ asset('images/Aroeira/artesanato/a2.jpeg') }}">
                <img src="{{ asset('images/Aroeira/artesanato/a3.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Aroeira/artesanato/a1.jpeg') }}">
                <img src="{{ asset('images/Aroeira/artesanato/a2.jpeg') }}">
                <img src="{{ asset('images/Aroeira/artesanato/a3.jpeg') }}">
        
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
                <p>A agricultura familiar constitui a base da organização social, econômica e do modo de vida da Comunidade Quilombola de Aroeira.
                    Os moradores cultivam milho, feijão, abóbora, maxixe e mandioca, além de frutas como goiaba, coco, limão, manga, umbu, laranja aromática,
                    mamão, maracujá do mato e graviola, garantindo diversidade alimentar e nutricional para as famílias. Essa produção fortalece a autonomia alimentar
                    e mantém a relação direta da comunidade com o território.
                </p>

                <p>O cultivo é realizado de forma coletiva, envolvendo pais, filhos e netos, o que favorece a troca de conhecimentos e a transmissão dos saberes
                    agrícolas entre as gerações. Além dos alimentos, também são cultivadas ervas medicinais, como capim-santo, erva-cidreira e hortelã, utilizadas
                    no cuidado tradicional com a saúde. Essas práticas reforçam o respeito à natureza e valorizam os conhecimentos ancestrais relacionados ao uso
                    da terra.
                </p>

                <p>O excedente da produção agrícola é comercializado em feiras e mercados locais, contribuindo para a renda das famílias e fortalecendo a autonomia
                    econômica da comunidade. Dessa forma, a agricultura familiar em Aroeira vai além da produção de alimentos, constituindo-se como um modo de vida que preserva saberes, fortalece os laços comunitários e assegura a continuidade das práticas e relações construídas no território.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Aroeira/Agricultura/h1.jpeg') }}">
                <img src="{{ asset('images/Aroeira/Agricultura/h2.jpeg') }}">
                <img src="{{ asset('images/Aroeira/Agricultura/h3.jpeg') }}">
                <img src="{{ asset('images/Aroeira/Agricultura/h4.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Aroeira/Agricultura/h1.jpeg') }}">
                <img src="{{ asset('images/Aroeira/Agricultura/h2.jpeg') }}">
                <img src="{{ asset('images/Aroeira/Agricultura/h3.jpeg') }}">
                <img src="{{ asset('images/Aroeira/Agricultura/h4.jpeg') }}">
        
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
                <p>
                A culinária do Quilombo Aroeira está diretamente ligada à agricultura familiar e aos saberes partilhados entre gerações, constituindo um elemento central das memórias e dos modos de vida da comunidade. Os ingredientes cultivados no próprio território dão origem a preparações que carregam histórias e significados, como o bolo de puba, o bolo de aipim, o caldo de frango, o pirão de frango caipira, o frango cheio e o frango caipira, evidenciando a forte relação entre o cultivo da terra e as formas tradicionais de preparo dos alimentos.
                </p>

                <p>O preparo dos alimentos ocorre, muitas vezes, de forma coletiva, especialmente em encontros familiares e celebrações comunitárias,
                    fortalecendo os vínculos entre os moradores. Cozinhar, em Aroeira, representa mais do que uma prática cotidiana, sendo um ato de preservação
                    da memória e de transmissão dos saberes ancestrais. Por meio dessas práticas, as receitas são repassadas entre gerações, garantindo a continuidade
                    da tradição culinária quilombola.
                </p>

                <p>
                Mais do que alimento, a culinária de Aroeira expressa resistência, pertencimento e formas próprias de se reconhecer no território. A partilha das receitas e dos momentos à mesa fortalece vínculos, atualiza memórias e mantém em circulação os saberes herdados, evidenciando que sua continuidade está diretamente ligada à permanência desses modos de viver frente aos desafios do presente.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Aroeira/comida/p1.JPG') }}">
                <img src="{{ asset('images/Aroeira/comida/p2.JPG') }}">
                <img src="{{ asset('images/Aroeira/comida/p3.jpg') }}">
                <img src="{{ asset('images/Aroeira/comida/p4.JPG') }}">
                <img src="{{ asset('images/Aroeira/comida/p5.jpg') }}">
                <img src="{{ asset('images/Aroeira/comida/p6.jpg') }}">
                <img src="{{ asset('images/Aroeira/comida/p7.jpg') }}">
                <img src="{{ asset('images/Aroeira/comida/p8.jpg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Aroeira/comida/p1.JPG') }}">
                <img src="{{ asset('images/Aroeira/comida/p2.JPG') }}">
                <img src="{{ asset('images/Aroeira/comida/p3.jpg') }}">
                <img src="{{ asset('images/Aroeira/comida/p4.JPG') }}">
                <img src="{{ asset('images/Aroeira/comida/p5.jpg') }}">
                <img src="{{ asset('images/Aroeira/comida/p6.jpg') }}">
                <img src="{{ asset('images/Aroeira/comida/p7.jpg') }}">
                <img src="{{ asset('images/Aroeira/comida/p8.jpg') }}">
        
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

                <p>O Quilombo Aroeira carrega em suas raízes a força da ancestralidade e o orgulho de uma trajetória marcada pela resistência e pela busca por liberdade. Os moradores preservam a memória de seus antepassados por meio dos costumes, da fé e dos saberes compartilhados entre gerações, reafirmando diariamente a identidade quilombola e o compromisso com a continuidade da história coletiva. Entre esses guardiões da memória destacam-se:</p>

                <p>Maria da Conceição dos Santos, 72 anos, moradora da comunidade há cerca de cinco décadas, que atua como lavradora e guardiã dos saberes culinários tradicionais (1).</p>

                <p>Júlio dos Santos, 68 anos, residente na comunidade há aproximadamente 50 anos, participante ativo do reisado e conhecedor de plantas medicinais, conhecimentos aprendidos com sua avó (2).</p>

                <p>Nelci Conceição dos Santos, 46 anos, nascida na Comunidade Quilombola de Vargem Alta e atual líder e representante comunitária em Aroeira, atua como professora na rede municipal e defensora dos direitos quilombolas, contribuindo para o fortalecimento da identidade coletiva e da luta por reconhecimento (3).</p>

                <p>Rosalina Montalvão dos Santos, 44 anos, que sempre viveu na comunidade e mantém viva a tradição culinária aprendida com sua mãe e sua tia (4).</p>

                <p>Vanilton Magalhães Neves, 44 anos, residente na comunidade há mais de 30 anos. Atua na agricultura, dedicando-se ao cultivo da terra e à preservação dos saberes ancestrais transmitidos entre gerações. Seu trabalho contribui para a manutenção das práticas tradicionais e para o fortalecimento da identidade e do modo de vida da comunidade (5).</p>

                <p>Lizenir Brito dos Santos Oliveira, 29 anos, que chegou à comunidade há dois anos trazendo conhecimentos culinários herdados de sua mãe e de sua avó (6).</p>

                <p>Osvaldina Lima Pereira, 51 anos, que vive há mais de 30 anos em Aroeira e é reconhecida pelo preparo da feijoada e pela participação nas festividades comunitárias (7).</p>

                <p>Cleidmar Brito dos Santos, 32 anos, descendente de quilombolas, que desde a infância cultiva o interesse pela culinária tradicional, participando ativamente das celebrações locais (8).</p>

                <p>Assim, Aroeira se consolida como um território de resistência cultural, onde memória, tradição e coletividade se entrelaçam, garantindo que os saberes e práticas ancestrais continuem sendo transmitidos às futuras gerações.</p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens guardioes-enumeradas">

                <figure class="guardiao-item">
                    <span class="guardiao-numero">1</span>
                    <img src="{{ asset('images/Aroeira/guardia/g3.jpg') }}" alt="Guardiões da memória - imagem 1">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">2</span>
                    <img src="{{ asset('images/Aroeira/guardia/g4.jpeg') }}" alt="Guardiões da memória - imagem 2">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">3</span>
                    <img src="{{ asset('images/Aroeira/guardia/nelci.jpeg') }}" alt="Guardiões da memória - imagem 3">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">4</span>
                    <img src="{{ asset('images/Aroeira/guardia/g1.JPG') }}" alt="Guardiões da memória - imagem 4">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">5</span>
                    <img src="{{ asset('images/Aroeira/guardia/Vanilton.jpeg') }}" alt="Guardiões da memória - imagem 5">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">6</span>
                    <img src="{{ asset('images/Aroeira/guardia/g7.jpeg') }}" alt="Guardiões da memória - imagem 6">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">7</span>
                    <img src="{{ asset('images/Aroeira/guardia/g5.jpeg') }}" alt="Guardiões da memória - imagem 7">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">8</span>
                    <img src="{{ asset('images/Aroeira/guardia/g6.jpg') }}" alt="Guardiões da memória - imagem 7">
                </figure>

                <!-- loop -->
                <figure class="guardiao-item">
                    <span class="guardiao-numero">1</span>
                    <img src="{{ asset('images/Aroeira/guardia/g3.jpg') }}" alt="Guardiões da memória - imagem 1">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">2</span>
                    <img src="{{ asset('images/Aroeira/guardia/g4.jpeg') }}" alt="Guardiões da memória - imagem 2">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">3</span>
                    <img src="{{ asset('images/Aroeira/guardia/nelci.jpeg') }}" alt="Guardiões da memória - imagem 3">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">4</span>
                    <img src="{{ asset('images/Aroeira/guardia/g1.JPG') }}" alt="Guardiões da memória - imagem 4">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">5</span>
                    <img src="{{ asset('images/Aroeira/guardia/Vanilton.jpeg') }}" alt="Guardiões da memória - imagem 5">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">6</span>
                    <img src="{{ asset('images/Aroeira/guardia/g7.jpeg') }}" alt="Guardiões da memória - imagem 6">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">7</span>
                    <img src="{{ asset('images/Aroeira/guardia/g5.jpeg') }}" alt="Guardiões da memória - imagem 7">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">8</span>
                    <img src="{{ asset('images/Aroeira/guardia/g6.jpg') }}" alt="Guardiões da memória - imagem 7">
                </figure>

            </div>

        </div>
        

    </section>
</div>

@endsection
