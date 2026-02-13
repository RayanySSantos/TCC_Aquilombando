@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Vargem Comprida/festejos/10.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Vargem Comprida: Festas e Tradições do Território</h1>
        <span>Costumes e Tradições</span>
    </div>
</section>

<section class="costumes-hero">
    <div class="costumes-hero-container">
        <div class="costumes-hero-texto">

            <p>Os costumes e tradições da Comunidade Quilombola de Vargem Comprida permanecem vivos no cotidiano dos moradores, manifestando-se por meio do reisado, da dança de roda e de diversas celebrações religiosas, como as vias sacras, a missa do padroeiro, o Natal e a tradicional fogueira de São João. Esses momentos coletivos representam espaços de fé, encontro e partilha, nos quais a comunidade se reúne para celebrar sua história, fortalecer laços afetivos e reafirmar valores construídos ao longo do tempo.</p>

            <p>Entre essas expressões culturais, o reisado ocupa lugar de destaque como uma das manifestações mais significativas da comunidade. A celebração reúne moradores de diferentes idades em cortejos marcados por cantos tradicionais, danças, versos rimados e o uso de instrumentos simples, que conduzem a festividade pelos espaços da comunidade. A participação de crianças, jovens, adultos e idosos fortalece os vínculos comunitários e assegura a continuidade dessa tradição entre as gerações.</p>

            <p>Mais do que um evento festivo, o reisado expressa fé, devoção e memória ancestral, conectando a comunidade às suas raízes históricas e espirituais. Cada canto, gesto e verso carrega significados ligados à resistência cultural e à preservação dos saberes quilombolas. Transmitida de forma oral e vivencial, essa tradição mantém viva a ligação com o passado, ao mesmo tempo em que se renova no presente, reafirmando o reisado como símbolo de identidade, pertencimento e continuidade cultural em Vargem Comprida.</p>

        </div>

        <div class="costumes-hero-galeria">
            <div class="costumes-foto"><img src="{{ asset('images/Vargem Comprida/festejos/f1.jpeg') }}" alt="Vargem Comprida 1"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Vargem Comprida/festejos/f2.jpeg') }}" alt="Vargem Comprida 2"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Vargem Comprida/festejos/f3.jpeg') }}" alt="Vargem Comprida 3"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Vargem Comprida/festejos/f4.jpeg') }}" alt="Vargem Comprida 4"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Vargem Comprida/festejos/f5.jpeg') }}" alt="Vargem Comprida 5"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Vargem Comprida/festejos/f6.jpeg') }}" alt="Vargem Comprida 6"></div>
        </div>
    </div>
</section>
@endsection
