@extends('layouts.app')

@section('content')
<section class="historia-capa" style="background-image: linear-gradient(rgba(58, 15, 15, 0.95), rgba(58, 15, 15, 0.35)), url('{{ asset('images/capa/aroeira.png') }}');">
    <div class="historia-capa-conteudo">
        <h1>Quilombo Aroeira</h1>
        <span>História</span>
    </div>
</section>

<section class="historia-hero">
    <div class="historia-hero-container">
        <div class="historia-hero-texto">

            <p>
                O Quilombo Aroeira está localizado na zona rural do município de Palmas de Monte Alto, Bahia, e tem suas origens
                diretamente ligadas à trajetória de Vitor Brito, um homem livre que foi escravizado e posteriormente conquistou sua
                carta de alforria. A partir de sua história, formou-se um legado de resistência que se expandiu por diversos quilombos
                dos territórios do Sertão Produtivo e do Velho Chico, constituindo a base da memória coletiva, da luta pelo território
                e da identidade cultural da Comunidade Quilombola de Aroeira.
            </p>

            <p>
                Na Comunidade Quilombola de Aroeira, a preservação dessa memória ancestral é fortalecida pela atuação de Dona Maria da Conceição
                dos Santos, tataraneta de Vitor Brito e reconhecida como matriarca da comunidade. Aos 72 anos de idade e com cerca de cinco décadas
                de vivência no quilombo, Dona Maria mantém vivos os saberes herdados de sua avó e de sua mãe, especialmente aqueles relacionados à
                culinária tradicional. Além disso, dedica-se ao trabalho com a terra e ao artesanato,
                transformando em prática cotidiana os conhecimentos transmitidos entre as mulheres de sua família.
            </p>

            <p>
            Essa continuidade histórica e cultural foi fundamental para que, em 02 de abril de 2016, a Comunidade Quilombola de Aroeira
            recebesse a certificação oficial da Fundação Cultural Palmares, consolidando seu reconhecimento enquanto território quilombola.
            Atualmente, a liderança da comunidade é exercida por Nelci Conceição dos Santos, nascida no próprio quilombo, que atua na defesa
            dos direitos da população local e na articulação de iniciativas voltadas à valorização cultural. Sua atuação reafirma o
            protagonismo feminino e o compromisso coletivo com a preservação da história, dos valores e da identidade do Quilombo Aroeira.
            </p>

        </div>

        <div class="historia-hero-galeria">
            <div class="historia-foto"><img src="{{ asset('images/Aroeira/guardia/g4.jpeg') }}" alt="Aroeira 1"></div>
            <div class="historia-foto"><img src="{{ asset('images/Aroeira/festejos/f3.png') }}" alt="Aroeira 2"></div>
            <div class="historia-foto"><img src="{{ asset('images/Aroeira/Agricultura/h4.jpeg') }}" alt="Aroeira 3"></div>
            <div class="historia-foto"><img src="{{ asset('images/Aroeira/historia/hi1.jpeg') }}" alt="Aroeira 4"></div>
            <div class="historia-foto"><img src="{{ asset('images/Aroeira/artesanato/a3.jpeg') }}" alt="Aroeira 5"></div>
            <div class="historia-foto"><img src="{{ asset('images/Aroeira/comida/p7.jpg') }}" alt="Aroeira 6"></div>
        </div>
    </div>
</section>
@endsection
