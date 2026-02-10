@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Aroeira/artesanato/a1.jpeg') }}');">
    <div class="secao-capa-conteudo">
        <h1>Aroeira: Artesanato e Memória Ancestral</h1>
        <span>Artesanato</span>
    </div>
</section>

<section class="artesanato-hero">
    <div class="artesanato-hero-container">
        <div class="artesanato-hero-texto">
            <h2 class="secao-titulo">Aroeira: Artesanato e Memória Ancestral</h2>

            <p>O artesanato da Comunidade Quilombola de Aroeira é uma expressão viva da criatividade e do legado cultural da comunidade. As peças produzidas incluem tapetes, flores, cestos de fibra de bananeira e trabalhos em crochê confeccionados com linha fiada no fuso de algodão, todos elaborados a partir de técnicas tradicionais transmitidas de geração em geração. Cada criação reflete a memória ancestral e o saber das mulheres da comunidade, mantendo viva a história e a identidade quilombola.</p>

            <p>O aprendizado dessas técnicas ocorre, principalmente, no âmbito familiar, sendo repassado pelas mulheres, que desempenham papel central na preservação dos saberes artesanais. Esse processo fortalece os laços entre as gerações e mantém a cultura presente no cotidiano da comunidade, fazendo do artesanato um espaço de convivência, troca de conhecimentos e afirmação identitária.</p>

        <p>Além de seu valor cultural, o artesanato também contribui para a economia local, pois as peças produzidas são comercializadas em feiras e eventos, complementando a renda das famílias e incentivando a autonomia financeira. Cada objeto carrega uma história e simboliza a continuidade das tradições, tornando o artesanato de Aroeira não apenas uma atividade produtiva, mas também uma forma de resistência cultural e valorização da memória coletiva.</p>

        </div>

        <div class="artesanato-hero-galeria">
            <div class="artesanato-foto"><img src="{{ asset('images/Aroeira/artesanato/a1.jpeg') }}" alt="Aroeira 1"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Aroeira/artesanato/a2.jpeg') }}" alt="Aroeira 2"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Aroeira/artesanato/a3.jpeg') }}" alt="Aroeira 3"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Aroeira/artesanato/a1.jpeg') }}" alt="Aroeira 4"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Aroeira/artesanato/a2.jpeg') }}" alt="Aroeira 5"></div>
            <div class="artesanato-foto"><img src="{{ asset('images/Aroeira/artesanato/a3.jpeg') }}" alt="Aroeira 6"></div>
        </div>
    </div>
</section>
@endsection
