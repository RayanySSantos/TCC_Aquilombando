@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Vargem Comprida/Agricultura/vargemcomprida.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Vargem Comprida: Cultivo e Permanência</h1>
        <span>Agricultura Familiar</span>
    </div>
</section>

<section class="agricultura-hero">
    <div class="agricultura-hero-container">
        <div class="agricultura-hero-texto">

            <p>A agricultura familiar ocupa um lugar central na subsistência e no modo de vida da Comunidade Quilombola de Vargem Comprida. Em pequenos roçados próximos às casas, os moradores cultivam feijão, milho, mandioca, batata-doce, maxixe, abóbora, hortaliças, frutas e diversas raízes, garantindo alimentos frescos, saudáveis e produzidos de forma tradicional. Esse cultivo cotidiano reflete a relação histórica da comunidade com a terra, marcada pelo cuidado, pelo respeito aos ciclos naturais e pela valorização dos saberes herdados dos antepassados.</p>

            <p>O trabalho na roça é realizado de forma coletiva e envolve diferentes gerações da comunidade. Pais, filhos e netos compartilham experiências e conhecimentos relacionados ao plantio, ao manejo do solo e às práticas agrícolas sustentáveis, promovendo momentos de aprendizado e fortalecimento dos laços familiares e comunitários. Essa convivência diária assegura a continuidade dos modos de cultivo tradicionais e reforça o sentimento de pertencimento ao território.</p>

            <p>Além de garantir o abastecimento alimentar das famílias, a agricultura familiar possibilita a comercialização do excedente em feiras e mercados locais, contribuindo para a geração de renda e para a autonomia econômica da comunidade. Dessa forma, a agricultura em Vargem Comprida ultrapassa a função de sustento, afirmando-se como expressão de identidade, memória coletiva e resistência quilombola, fundamentais para a manutenção do modo de vida tradicional.</p>

        </div>

        <div class="agricultura-hero-galeria">
            <div class="agricultura-foto"><img src="{{ asset('images/Vargem Comprida/Agricultura/h1.jpeg') }}" alt="Vargem Comprida 1"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Vargem Comprida/Agricultura/h2.jpeg') }}" alt="Vargem Comprida 2"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Vargem Comprida/Agricultura/h3.jpeg') }}" alt="Vargem Comprida 3"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Vargem Comprida/Agricultura/h4.jpeg') }}" alt="Vargem Comprida 4"></div>
        </div>
    </div>
</section>
@endsection
