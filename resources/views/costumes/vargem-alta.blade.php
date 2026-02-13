@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Vargem Alta/festejos/5.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Vargem Alta: Tradições e Celebrações</h1>
        <span>Costumes e Tradições</span>
    </div>
</section>

<section class="costumes-hero">
    <div class="costumes-hero-container">
        <div class="costumes-hero-texto">

            <p>Os costumes e tradições da Comunidade Quilombola de Vargem Alta são construídos e fortalecidos a partir de práticas culturais, saberes tradicionais e experiências compartilhadas no cotidiano. Esses elementos são transmitidos entre as gerações, principalmente por meio da oralidade e da vivência coletiva, permitindo que a memória ancestral permaneça viva e significativa. Dessa forma, a cultura se manifesta como base da identidade quilombola e da organização comunitária.</p>

            <p>Na comunidade, as manifestações culturais seguem presentes no dia a dia e desempenham papel central na preservação da identidade local. Rezas, o reisado, as festas juninas e as comemorações do Dia da Consciência Negra reúnem moradores de diferentes idades, fortalecendo o sentimento de pertencimento, união e valorização da ancestralidade. Esses momentos coletivos reafirmam os vínculos comunitários e mantêm vivas práticas herdadas dos antepassados.</p>

            <p>Além das celebrações, oficinas de artesanato e atividades culturais contribuem de forma significativa para a transmissão dos saberes tradicionais. Essas iniciativas possibilitam que crianças e jovens aprendam, valorizem e deem continuidade às práticas culturais da comunidade. Assim, os costumes e tradições de Vargem Alta se mantêm vivos, fortalecidos pela participação coletiva e pela valorização da memória e da identidade quilombola.</p>

        </div>

        <div class="costumes-hero-galeria">
            <div class="costumes-foto"><img src="{{ asset('images/Vargem Alta/festejos/f1.jpeg') }}" alt="Vargem Alta 1"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Vargem Alta/festejos/f2.jpeg') }}" alt="Vargem Alta 2"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Vargem Alta/festejos/f3.jpeg') }}" alt="Vargem Alta 3"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Vargem Alta/festejos/f4.jpeg') }}" alt="Vargem Alta 4"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Vargem Alta/festejos/f5.jpeg') }}" alt="Vargem Alta 5"></div>
            <div class="costumes-foto"><img src="{{ asset('images/Vargem Alta/festejos/f6.jpeg') }}" alt="Vargem Alta 6"></div>
        </div>
    </div>
</section>
@endsection
