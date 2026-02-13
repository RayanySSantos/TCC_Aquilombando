@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Aroeira/Agricultura/aroeira.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Aroeira: Agricultura Familiar e Território</h1>
        <span>Agricultura Familiar</span>
    </div>
</section>

<section class="agricultura-hero">
    <div class="agricultura-hero-container">
        <div class="agricultura-hero-texto">

            <p>A agricultura familiar é essencial para a sobrevivência e a organização social da Comunidade Quilombola de Aroeira. Os moradores cultivam milho, feijão, abóbora, maxixe, mandioca, além de frutas como goiaba, coco, limão, manga, umbu, laranja aromática, mamão, maracujá do mato e graviola, garantindo diversidade alimentar e nutricional. Paralelamente, são cultivadas ervas medicinais, como capim-santo, erva-cidreira e hortelã, utilizadas no cuidado tradicional com a saúde, reforçando o respeito à natureza e a valorização dos saberes ancestrais ligados à terra.</p>

            <p>O cultivo é realizado de forma coletiva, com a participação de pais, filhos e netos, promovendo a troca de conhecimentos e fortalecendo os laços familiares e comunitários. Esse trabalho conjunto mantém vivas as tradições agrícolas e assegura a transmissão de técnicas entre as gerações. Além de garantir o sustento das famílias, o excedente da produção é comercializado em feiras e mercados locais, contribuindo para a renda familiar e reforçando a autonomia econômica da comunidade.</p>

            <p>Na Comunidade Quilombola de Aroeira, a mandioca ocupa um lugar central na vida cotidiana, indo além de sua função produtiva. Ela simboliza herança cultural, sustento e permanência no território, mobilizando saberes coletivos e práticas transmitidas entre gerações. A partir dessa raiz são produzidos diversos alimentos que compõem a alimentação das famílias, como a farinha, o polvilho, além de biscoitos, chiringa e chimango, expressões culinárias marcadas pela ancestralidade e pela identidade quilombola.</p>

        </div>

        <div class="agricultura-hero-galeria">
            <div class="agricultura-foto"><img src="{{ asset('images/Aroeira/Agricultura/h1.jpeg') }}" alt="Aroeira 1"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Aroeira/Agricultura/h2.jpeg') }}" alt="Aroeira 2"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Aroeira/Agricultura/h3.jpeg') }}" alt="Aroeira 3"></div>
        </div>
    </div>
</section>
@endsection
