@extends('layouts.app')

@section('content')
<section class="historia-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.95), rgba(58, 15, 15, 0.35)), url('{{ asset('images/capa/alta.png') }}');">
<div class="historia-capa-conteudo">
        <h1>Quilombo Vargem Alta</h1>
        <span>História</span>
    </div>
</section>

<section class="historia-hero">
    <div class="historia-hero-container">
        <div class="historia-hero-texto">

            <p>
                A Comunidade Quilombola de Vargem Alta, localizada na zona rural do município de Palmas de Monte Alto, Bahia,
                possui uma trajetória marcada pela força, resistência e união de seus antepassados. Os primeiros moradores enfrentaram
                inúmeros desafios para garantir a permanência no território e manter vivas suas tradições culturais. A agricultura
                sempre foi o principal alicerce econômico e social da comunidade, com destaque para o cultivo de feijão, mandioca,
                umbu-cajá, manga, goiaba, acerola, tamarindo e laranja, alimentos que sustentam as famílias e preservam o modo de vida
                tradicional quilombola.
            </p>

            <p>
                O reconhecimento oficial como comunidade quilombola ocorreu em 31 de dezembro de 2008, por meio da certificação
                concedida pela Fundação Cultural Palmares, com apoio da Secretaria de Educação. Esse marco representou um avanço
                significativo para Vargem Alta, possibilitando o acesso a benefícios como cestas básicas, atendimento médico,
                caixas d’água, cisternas e programas voltados ao meio rural. Além disso, o reconhecimento fortaleceu a identidade
                quilombola e ampliou a visibilidade das demandas sociais e culturais da comunidade.
            </p>

            <p>
                No âmbito da organização comunitária, a liderança foi exercida inicialmente por Manoel José de Lima, que esteve à
                frente da comunidade por quatro anos. Posteriormente, a função passou a ser desempenhada por Sidália Montalvão de Brito,
                que, a pedido dos moradores, atua como líder há quase dois anos. Sua gestão tem buscado fortalecer a união entre os
                moradores e promover melhorias por meio de projetos culturais e sociais. Entre as conquistas recentes destacam-se a
                chegada da energia elétrica, a criação da Associação Comunitária, o acesso à internet e a implementação da fábrica de
                farinha, marcos que reforçam a autonomia, a organização coletiva e a identidade quilombola de Vargem Alta.
            </p>

        </div>

        <div class="historia-hero-galeria">
            <div class="historia-foto"><img src="{{ asset('images/Vargem Alta/festejos/f3.jpeg') }}" alt="Vargem Alta 1"></div>
            <div class="historia-foto"><img src="{{ asset('images/Vargem Alta/guardia/g9.jpeg') }}" alt="Vargem Alta 2"></div>
            <div class="historia-foto"><img src="{{ asset('images/Vargem Alta/Agricultura/h1.jpeg') }}" alt="Vargem Alta 3"></div>
            <div class="historia-foto"><img src="{{ asset('images/Vargem Alta/historia/hi5.jpeg') }}" alt="Vargem Alta 4"></div>
            <div class="historia-foto"><img src="{{ asset('images/Vargem Alta/artesanato/a1.jpeg') }}" alt="Vargem Alta 5"></div>
            <div class="historia-foto"><img src="{{ asset('images/Vargem Alta/comida/p4.jpeg') }}" alt="Vargem Alta 6"></div>
        </div>
    </div>
</section>
@endsection
