@extends('layouts.app')

@section('content')
<section class="secao-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.45), rgba(58, 15, 15, 0.35)), url('{{ asset('images/Lagoa dos Anjos/Agricultura/lagoadosanjos.png') }}');">
    <div class="secao-capa-conteudo">
        <h1>Lagoa dos Anjos: Agricultura e Saberes do Campo</h1>
        <span>Agricultura Familiar</span>
    </div>
</section>

<section class="agricultura-hero">
    <div class="agricultura-hero-container">
        <div class="agricultura-hero-texto">

            <p>A agricultura familiar constitui a base econômica e social da Comunidade Quilombola de Lagoa dos Anjos. Os moradores cultivam a terra de forma coletiva e sustentável, produzindo alimentos que garantem a subsistência das famílias e fortalecem os vínculos com o território. Entre os principais cultivos estão feijão, milho, batata-doce, hortaliças e diversas frutas, como manga, limão, laranja, mamão, acerola, tangerina, pitanga, coco e amora, compondo uma produção diversificada e adaptada às condições locais.</p>

            <p>Esse modelo de produção reflete não apenas a necessidade de alimento, mas também o compromisso com práticas que respeitam a natureza e preservam o equilíbrio ambiental. O cultivo de ervas medicinais na própria comunidade exemplifica a valorização da biodiversidade local e da sabedoria tradicional transmitida entre gerações. A terra é compreendida como fonte de vida e deve ser cuidada de forma responsável, fortalecendo uma relação de respeito entre o ser humano e o ambiente.</p>

            <p>A agricultura em Lagoa dos Anjos também se configura como um espaço de aprendizado e construção coletiva. Pais, filhos e netos participam juntos do cultivo, garantindo a transmissão de técnicas e saberes que reforçam a identidade quilombola e os laços familiares. Além de assegurar o sustento, a produção agrícola possibilita a comercialização do excedente em feiras e mercados locais, contribuindo para a geração de renda, a autonomia financeira e a manutenção da agricultura familiar como pilar da identidade cultural da comunidade.</p>

        </div>

        <div class="agricultura-hero-galeria">
            <div class="agricultura-foto"><img src="{{ asset('images/Lagoa dos Anjos/Agricultura/h1.jpeg') }}" alt="Lagoa dos Anjos 1"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Lagoa dos Anjos/Agricultura/h2.jpeg') }}" alt="Lagoa dos Anjos 2"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Lagoa dos Anjos/Agricultura/h3.jpeg') }}" alt="Lagoa dos Anjos 3"></div>
            <div class="agricultura-foto"><img src="{{ asset('images/Lagoa dos Anjos/Agricultura/h4.jpeg') }}" alt="Lagoa dos Anjos 4"></div>
        </div>
    </div>
</section>
@endsection
