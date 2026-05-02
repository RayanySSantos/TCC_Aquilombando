@extends('layouts.comunidade')

@section('titulo', 'Quilombo Vargem Alta')
@section('nome-comunidade', 'QUILOMBO VARGEM ALTA')
@section('fonte-quilombo', 'Quilombo Vargem Alta')

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

                <p>A certificação oficial como quilombo, concedida pela Fundação Cultural Palmares em <strong>31 de dezembro de 2008</strong>, com apoio
                    da Secretaria de Educação, representou um marco importante para a comunidade. Esse reconhecimento possibilitou o
                    acesso a benefícios como cestas básicas, atendimento médico, caixas d’água, cisternas e programas voltados ao meio rural,
                    além de fortalecer a identidade quilombola. No âmbito da organização social, a liderança comunitária foi exercida inicialmente
                    por <strong>Manoel José de Lima</strong>, que esteve à frente da comunidade por quatro anos.
                </p>

                <p>Posteriormente, a função passou a ser desempenhada por <strong>Sidália Montalvão de Brito</strong>, que, a pedido dos moradores, lidera a
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

                <p>
                Na vida comunitária, os saberes e modos de viver são partilhados entre as gerações por meio de práticas que envolvem música, dança, espiritualidade e oralidade. As rezas, os festejos e as celebrações coletivas fortalecem os vínculos entre as pessoas e preservam a memória coletiva, mantendo vivos os ensinamentos herdados dos antepassados e contribuindo para a continuidade das identidades da comunidade.
                </p>

                <p>
                Além das celebrações, iniciativas como oficinas de artesanato e atividades coletivas têm papel fundamental na partilha dos saberes ancestrais. Essas ações criam espaços de aprendizagem onde crianças e jovens podem conhecer, valorizar e vivenciar os modos de fazer da comunidade, assegurando que as memórias e ensinamentos de Vargem Alta permaneçam presentes e fortalecidos no cotidiano.
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
                <p>O artesanato da Comunidade Quilombola de Vargem Alta materializa saberes, criatividade e modos próprios de viver, revelando a relação da comunidade com seu território e com os ensinamentos herdados de seus antepassados.
                    Entre as práticas mais valorizadas estão a produção de peças em crochê, o fiar do algodão, a tecelagem no tear de roda, além de técnicas
                    como ponto cruz, marambaia, vagonite e costura, bem como outros trabalhos manuais com materiais disponíveis no território. Cada peça produzida
                    reflete a memória coletiva e os saberes ancestrais transmitidos ao longo das gerações.
                </p>

                <p>As mulheres desempenham papel central na preservação e continuidade dessas práticas artesanais, sendo responsáveis por ensinar aos mais
                    jovens os modos tradicionais de produção. O aprendizado do artesanato fortalece os laços familiares e comunitários, promovendo a troca
                    de conhecimentos e valorizando o trabalho manual como elemento fundamental da identidade quilombola de Vargem Alta.
                </p>

                <p>
                    Para além de seu valor simbólico, o artesanato também fortalece a economia local, já que muitas peças são comercializadas em feiras e eventos, gerando renda e ampliando a autonomia das famílias. Mais do que objetos, os trabalhos manuais expressam pertencimento, resistência e protagonismo das mulheres, mantendo vivos os saberes da comunidade e reafirmando a importância de sua continuidade entre as gerações.
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

                <p>
                    O trabalho agrícola é desenvolvido de forma coletiva, envolvendo diferentes gerações da comunidade, o que favorece a partilha contínua de conhecimentos e práticas ligadas ao cuidado com a terra. A vivência na roça fortalece a relação com o território e com a natureza, ao mesmo tempo em que mantém em circulação os saberes herdados, assegurando sua permanência no cotidiano da comunidade.
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
                <p>
                    A culinária do Quilombo de Vargem Alta expressa histórias, memórias e modos próprios de viver no território. Os ingredientes cultivados na própria comunidade, como mandioca, umbu-cajá, feijão, manga e outros frutos nativos, são transformados em preparações que atravessam gerações. Pratos como pamonha, paçoca de gergelim, canjica, cortado de maxixe com nata, além de doces e geleias artesanais, revelam a forte relação entre a agricultura familiar e as formas tradicionais de preparo dos alimentos, mantendo em circulação os saberes e fazeres da comunidade.
                </p>

                <p>O preparo dos alimentos ocorre, muitas vezes, de forma coletiva, envolvendo famílias inteiras em momentos de aprendizado, partilha e celebração.
                    A Casa de Farinha desempenha papel central nesse processo, promovendo a colaboração comunitária e garantindo autonomia produtiva.
                    Nesse contexto, os saberes culinários são transmitidos principalmente pelos mais velhos, fortalecendo os laços familiares e assegurando a
                    continuidade das práticas alimentares tradicionais no cotidiano da comunidade.
                </p>

                <p>
                    Mais do que sustento, a culinária expressa patrimônio imaterial, resistência e pertencimento, revelando formas próprias de se reconhecer no território. Pessoas da comunidade se destacam como guardiãs desses saberes, mantendo e compartilhando conhecimentos herdados por meio do cultivo da terra, do preparo dos alimentos e da participação nos momentos coletivos. Preservar essas receitas e modos de fazer é manter viva a história de Vargem Alta, fortalecer o vínculo com suas origens e assegurar que esses saberes continuem sendo partilhados entre as gerações.
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
                <p>
            A Comunidade Quilombola de Vargem Alta é tecida por histórias, afetos e saberes que atravessam gerações. Cada morador carrega consigo partes dessa memória coletiva, fazendo do cotidiano um espaço de continuidade e resistência.
            </p>

            <p>
            São homens e mulheres que, na relação com a terra, nos modos de viver e nas práticas compartilhadas, mantêm em movimento os ensinamentos herdados, fortalecendo os vínculos que sustentam a comunidade. Entre essas trajetórias, destacam-se pessoas que mantêm vivos os saberes e as memórias da comunidade:
            </p>

            <p>
            Alcides Lima de Oliveira, 66 anos, mora em Vargem Alta desde os 22 anos e dedica sua vida à agricultura familiar, cultivando a terra e participando ativamente do reisado, prática que reúne fé, música e devoção (1).
            </p>

            <p>
            Carlita Maria da Conceição Oliveira, 74 anos, aprendeu a cozinhar com a mãe e preserva modos tradicionais de preparo, como o uso de panelas de barro e a partilha dos alimentos em gamelas, mantendo viva a memória do fazer coletivo (2).
            </p>

            <p>
            Cleide da Conceição Oliveira de Jesus, 40 anos, natural de Vargem Alta e moradora da comunidade vizinha Lagoa de Canudo, carrega os saberes aprendidos com a mãe, desde o plantio do milho até o preparo da pamonha, sendo também responsável pela alimentação em festas e encontros comunitários (3).
            </p>

            <p>
            Cristina Lopes dos Santos, 86 anos, vive há 69 anos em Vargem Alta e construiu sua trajetória na agricultura familiar, tornando-se referência de experiência e sabedoria (4).
            </p>

            <p>
            Sauza Pereira dos Reis, 61 anos, mora na comunidade desde o nascimento e contribui para a continuidade das práticas e dos modos de viver compartilhados (5).
            </p>

            <p>
            Roberta Pereira de Oliveira Lima, 51 anos, reside há 26 anos em Vargem Alta e atua na agricultura familiar e na culinária, fortalecendo os vínculos comunitários (6).
            </p>

            <p>
            Nilda Magalhães de Souza, 49 anos, aprendeu a cozinhar ainda criança, observando a mãe, e hoje concilia a culinária com o trabalho na roça, cultivando feijão, mandioca e hortaliças (7).
            </p>

            <p>
            Reginaldo Lima de Oliveira, 43 anos, trabalha na roça desde os 10 anos, aprendendo com o pai o cuidado com a terra. Vive da agricultura familiar, cultivando feijão, mandioca, milho, sorgo e palma, dando continuidade aos saberes entre gerações (8).
            </p>

            <p>
            Manoel José de Lima, 42 anos, atuou como liderança comunitária por quatro anos, contribuindo para a organização e o fortalecimento da comunidade, reafirmando a importância do trabalho coletivo, dos vínculos familiares e da relação com o território (9).
            </p>

            </div>
        </div>

        <div class="carrossel-pequeno">
            <div class="tres-imagens guardioes-enumeradas">
                
                <figure class="guardiao-item">
                    <span class="guardiao-numero">1</span>
                    <img src="{{ asset('images/Vargem Alta/guardia/g1.jpeg') }}" alt="Guardiões da memória - imagem 1">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">2</span>
                    <img src="{{ asset('images/Vargem Alta/guardia/g2.jpeg') }}" alt="Guardiões da memória - imagem 2">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">3</span>
                    <img src="{{ asset('images/Vargem Alta/guardia/g3.jpeg') }}" alt="Guardiões da memória - imagem 3">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">4</span>
                    <img src="{{ asset('images/Vargem Alta/guardia/g4.jpg') }}" alt="Guardiões da memória - imagem 4">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">5</span>
                    <img src="{{ asset('images/Vargem Alta/guardia/g5.JPG') }}" alt="Guardiões da memória - imagem 5">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">6</span>
                    <img src="{{ asset('images/Vargem Alta/guardia/g6.jpg') }}" alt="Guardiões da memória - imagem 6">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">7</span>
                    <img src="{{ asset('images/Vargem Alta/guardia/g7.jpeg') }}" alt="Guardiões da memória - imagem 7">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">8</span>
                    <img src="{{ asset('images/Vargem Alta/guardia/g8.jpeg') }}" alt="Guardiões da memória - imagem 8">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">9</span>
                    <img src="{{ asset('images/Vargem Alta/guardia/g11.jpeg') }}" alt="Guardiões da memória - imagem 9">
                </figure>
        
                <!-- loop -->
                <figure class="guardiao-item">
                    <span class="guardiao-numero">1</span>
                    <img src="{{ asset('images/Vargem Alta/guardia/g1.jpeg') }}" alt="Guardiões da memória - imagem 1">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">2</span>
                    <img src="{{ asset('images/Vargem Alta/guardia/g2.jpeg') }}" alt="Guardiões da memória - imagem 2">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">3</span>
                    <img src="{{ asset('images/Vargem Alta/guardia/g3.jpeg') }}" alt="Guardiões da memória - imagem 3">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">4</span>
                    <img src="{{ asset('images/Vargem Alta/guardia/g4.jpg') }}" alt="Guardiões da memória - imagem 4">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">5</span>
                    <img src="{{ asset('images/Vargem Alta/guardia/g5.JPG') }}" alt="Guardiões da memória - imagem 5">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">6</span>
                    <img src="{{ asset('images/Vargem Alta/guardia/g6.jpg') }}" alt="Guardiões da memória - imagem 6">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">7</span>
                    <img src="{{ asset('images/Vargem Alta/guardia/g7.jpeg') }}" alt="Guardiões da memória - imagem 7">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">8</span>
                    <img src="{{ asset('images/Vargem Alta/guardia/g8.jpeg') }}" alt="Guardiões da memória - imagem 8">
                </figure>
                <figure class="guardiao-item">
                    <span class="guardiao-numero">9</span>
                    <img src="{{ asset('images/Vargem Alta/guardia/g11.jpeg') }}" alt="Guardiões da memória - imagem 9">
                </figure>
        
            </div>
        </div>
        

    </section>
</div>

@endsection
