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
                    do Sertão Produtivo e do Velho Chico, deixando marcas profundas na formação histórica e na identidade cultural da região. Essa trajetória de
                    resistência e luta constitui a base da memória coletiva que sustenta a Comunidade Quilombola de Aroeira.
                </p>

                <p>Na Comunidade Quilombola de Aroeira, a matriarca Dona Maria da Conceição dos Santos, tataraneta de Vitor Brito, exerce papel fundamental na
                    preservação da história e das tradições locais. Com 72 anos de idade e cerca de cinquenta anos vivendo no quilombo, ela mantém viva a herança
                    de seus antepassados. Aprendeu a cozinhar com a avó e a mãe, preservando receitas transmitidas ao longo das gerações, que simbolizam a memória,
                    a resistência e o pertencimento do seu povo. Além do trabalho com a terra, dedica-se ao artesanato, transformando em arte os saberes herdados das
                    mulheres de sua família.
                </p>

                <p>Essa continuidade histórica contribuiu para que, em 02 de abril de 2016, a comunidade recebeu a certificação oficial da
                    Fundação Palmares, consolidando a identidade quilombola e ampliando a visibilidade de suas práticas culturais.
                    Atualmente, a liderança da comunidade é exercida por Nelci Conceição dos Santos, nascida no próprio quilombo e com 46 anos de idade,
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
                <p>A Comunidade Quilombola de Aroeira mantém vivas diversas manifestações culturais que fortalecem os laços comunitários e reafirmam a
                    memória coletiva. Entre essas práticas destacam-se o reisado, o samba de roda, as festas de São João, o Natal e a celebração de Santa Luzia,
                    além de tradições familiares transmitidas oralmente. Esses festejos reúnem moradores de diferentes gerações em momentos de fé, música, dança e
                    convivência, preservando valores culturais profundamente enraizados na história da comunidade.
                </p>

                <p>As celebrações desempenham papel central na transmissão dos saberes ancestrais, permitindo que crianças, jovens e adultos compartilhem
                    experiências e aprendizados construídos ao longo do tempo. Por meio dessas práticas culturais, a comunidade mantém viva a religiosidade,
                    a oralidade e os costumes herdados dos antepassados, garantindo que a memória coletiva continue sendo reconhecida e valorizada no cotidiano.
                </p>

                <p>O reisado, em especial, ocupa lugar de destaque na identidade cultural de Aroeira, sendo vivenciado como expressão de devoção, alegria e resistência.
                    Essas manifestações culturais asseguram a continuidade das tradições e reforçam o sentimento de pertencimento ao território quilombola, mantendo
                    viva a história, os saberes e a identidade da comunidade para o presente e para as futuras gerações.
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
                <p>O artesanato da Comunidade Quilombola de Aroeira é uma expressão viva da criatividade, da memória ancestral e do legado cultural da comunidade.
                    Entre as peças produzidas estão tapetes, flores, cestos confeccionados com fibra de bananeira e trabalhos em crochê feitos com linha fiada no
                    fuso de algodão, todos elaborados a partir de técnicas tradicionais transmitidas de geração em geração. Cada criação reflete o saber das mulheres
                    da comunidade e reafirma a identidade quilombola por meio do trabalho manual.
                </p>

                <p>O aprendizado dessas técnicas ocorre, principalmente, no interior das famílias, sendo repassado pelas mulheres, que desempenham papel central
                    na preservação e continuidade dos saberes artesanais. O artesanato torna-se, assim, um elo entre as gerações, fortalecendo os laços familiares
                    e comunitários, além de garantir que os conhecimentos tradicionais permaneçam vivos e valorizados pelas novas gerações.
                </p>

                <p>Além de seu valor cultural e simbólico, o artesanato também contribui para a economia local, uma vez que as peças são comercializadas em feiras
                    e eventos, complementando a renda das famílias e promovendo maior autonomia financeira. Mais do que uma atividade produtiva, o artesanato de
                    Aroeira representa resistência cultural, pertencimento e valorização da memória coletiva, assegurando a continuidade das tradições quilombolas.
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
                    econômica da comunidade. Dessa forma, a agricultura familiar em Aroeira não se limita à produção de alimentos, mas se consolida como prática
                    cultural e de resistência, preservando tradições, fortalecendo laços comunitários e reafirmando a identidade quilombola.
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
                <p>A culinária da Comunidade Quilombola de Aroeira reflete diretamente a agricultura familiar e os saberes transmitidos entre gerações,
                    sendo compreendida como elemento central da identidade cultural e da memória social do grupo. Os ingredientes produzidos localmente dão
                    origem a pratos tradicionais que carregam história e identidade cultural, como o bolo de puba, o bolo de aipim, o caldo de frango, o pirão
                    de frango caipira, o frango cheio e o frango caipira, evidenciando a forte relação entre o cultivo da terra e os modos tradicionais de preparo
                    dos alimentos.
                </p>

                <p>O preparo dos alimentos ocorre, muitas vezes, de forma coletiva, especialmente em encontros familiares e celebrações comunitárias,
                    fortalecendo os vínculos entre os moradores. Cozinhar, em Aroeira, representa mais do que uma prática cotidiana, sendo um ato de preservação
                    da memória e de transmissão dos saberes ancestrais. Por meio dessas práticas, as receitas são repassadas entre gerações, garantindo a continuidade
                    da tradição culinária quilombola.
                </p>

                <p>Mais do que alimento, a culinária de Aroeira simboliza resistência cultural e afirmação identitária. O compartilhamento das receitas e dos momentos
                    à mesa reafirma o orgulho, a história e os valores ancestrais da comunidade, demonstrando que a preservação dos saberes tradicionais está
                    diretamente ligada à continuidade da identidade quilombola e à resistência histórica frente aos desafios contemporâneos.
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
                <p>A Comunidade Quilombola de Aroeira carrega em suas raízes a força da ancestralidade e o orgulho de uma história marcada pela resistência e
                    pela liberdade. Herdeiros do legado de :contentReference[oaicite:0]{index=0}, seus moradores mantêm viva a memória dos antepassados por meio
                    dos costumes, da fé e dos saberes transmitidos entre gerações. Preservar essa herança significa reafirmar diariamente a identidade quilombola
                    e o compromisso com a continuidade da história coletiva.
                </p>

                <p>Esta cartilha se constitui como um registro da força e da sabedoria do povo de Aroeira, evidenciando que a maior riqueza da comunidade
                    está nas pessoas que guardam e compartilham seus saberes. Entre essas vozes estão Julio dos Santos, morador da comunidade há cinco décadas,
                    participante ativo do reisado e profundo conhecedor de plantas medicinais; Rosalina Montalvão dos Santos, que preserva a tradição culinária
                    aprendida com sua mãe e tia; Cleidimar Brito dos Santos, descendente de quilombolas, que desde a infância mantém vivo o amor pela culinária
                    tradicional; e Osvaldina Lima Pereira, conhecida pelo preparo da feijoada e pela dedicação às festas comunitárias.
                </p>

                <p>Também integra esse conjunto de guardiões da memória Lizeni Brito dos Santos Oliveira, que trouxe para Aroeira saberes culinários aprendidos
                    com sua mãe e avó, especialmente o preparo do caldo de frango associado ao cuidado com as mulheres no pós-parto. As histórias desses moradores
                    revelam como cada gesto, receita, canto e ensinamento fortalece os laços comunitários e assegura a continuidade da cultura quilombola. Assim,
                    Aroeira segue tecendo o fio de sua história, sustentada pela memória viva e pela dedicação de seu povo.
                </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens">
        
                <img src="{{ asset('images/Aroeira/guardia/g1.JPG') }}">
                <img src="{{ asset('images/Aroeira/guardia/g2.jpg') }}">
                <img src="{{ asset('images/Aroeira/guardia/g3.jpg') }}">
                <img src="{{ asset('images/Aroeira/guardia/g4.jpeg') }}">
                <img src="{{ asset('images/Aroeira/guardia/g5.jpeg') }}">
                <img src="{{ asset('images/Aroeira/guardia/g6.jpg') }}">
                <img src="{{ asset('images/Aroeira/guardia/g7.jpeg') }}">
        
                <!-- loop -->
                <img src="{{ asset('images/Aroeira/guardia/g1.JPG') }}">
                <img src="{{ asset('images/Aroeira/guardia/g2.jpg') }}">
                <img src="{{ asset('images/Aroeira/guardia/g3.jpg') }}">
                <img src="{{ asset('images/Aroeira/guardia/g4.jpeg') }}">
                <img src="{{ asset('images/Aroeira/guardia/g5.jpeg') }}">
                <img src="{{ asset('images/Aroeira/guardia/g6.jpg') }}">
                <img src="{{ asset('images/Aroeira/guardia/g7.jpeg') }}">
        
            </div>
        </div>
        

    </section>
</div>

@endsection
