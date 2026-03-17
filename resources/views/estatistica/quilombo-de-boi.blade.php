@extends('layouts.app')

@section('content')
<section class="estatistica-hero">
    <div class="estatistica-hero-container">
        <h1>Perfil dos participantes da comunidade Quilombo de Boi do projeto Mapeamento Gastronômico: o resgate dos saberes culinários quilombolas no Território Sertão Produtivo</h1>
    </div>
</section>

<div class="estatistica-container">
    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Boi/estatistica/idade.png') }}" alt="Gráfico de idade em Quilombo de Boi">
            <span class="estatistica-legenda">Distribuição etária da comunidade.</span>
        </div>
        <div class="estatistica-card-info estatistica-card-info--marrom">
            <h2>Idade dos quilombolas</h2>
            <p>A análise do perfil sociodemográfico dos(as) quilombolas da Comunidade de Boi evidencia um grupo majoritariamente composto por adultos em idade produtiva, com idades variando entre 28 e 58 anos. A mediana de 37 anos e a média aproximada de 43,1 anos indicam predominância de indivíduos inseridos ativamente nas dinâmicas produtivas, culturais e organizativas da comunidade, o que contribui para a manutenção das práticas tradicionais e para o fortalecimento da vida comunitária.</p>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-info estatistica-card-info--laranja">
            <h2>Tempo de Moradia</h2>
            <p>O tempo de residência na comunidade revela um forte vínculo territorial. Metade dos(as) participantes é composta por moradores(as) nativos(as), enquanto uma parcela significativa reside no território há mais de dez anos. Apenas uma minoria vive na comunidade há menos de uma década, o que demonstra a continuidade histórica da ocupação do território e o enraizamento das famílias quilombolas em Boi.</p>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Boi/estatistica/tempo que moraa.png') }}" alt="Tempo de moradia em Quilombo de Boi">
            <span class="estatistica-legenda">Tempo de permanência das famílias na comunidade.</span>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Boi/estatistica/escolaridade.png') }}" alt="Escolaridade em Quilombo de Boi">
            <span class="estatistica-legenda">Níveis de escolaridade declarados.</span>
        </div>
        <div class="estatistica-card-info estatistica-card-info--verde">
            <h2>Níveis de Escolaridade</h2>
            <p>Em relação à escolaridade, os dados indicam predominância do ensino médio completo, presente em 70% dos(as) participantes, enquanto os demais possuem ensino fundamental incompleto. Não foram registrados casos de ensino superior ou ensino médio incompleto, o que sugere um nível educacional concentrado no ensino médio, ao mesmo tempo em que aponta desafios relacionados à ampliação do acesso à formação continuada.</p>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-info estatistica-card-info--amarelo">
            <h2>Raça</h2>
            <p>Quanto à autodeclaração racial, a maioria dos(as) participantes se identifica como preta (70%), enquanto 30% se autodeclaram pardos(as). Essa distribuição reafirma a identidade negra da Comunidade Quilombola de Boi e seu pertencimento histórico, étnico e cultural ao território quilombola.</p>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Boi/estatistica/cor raça.png') }}" alt="Raça em Quilombo de Boi">
            <span class="estatistica-legenda">Autodeclaração racial da comunidade.</span>
        </div>
    </section>

    
</div>
@endsection
