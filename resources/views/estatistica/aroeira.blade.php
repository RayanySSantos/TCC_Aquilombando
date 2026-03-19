@extends('layouts.app')

@section('content')
<section class="estatistica-hero">
    <div class="estatistica-hero-container">
        <h1>Perfil dos participantes da comunidade Aroeira do projeto Mapeamento Gastronômico: o resgate dos saberes culinários quilombolas no Território Sertão Produtivo</h1>
    </div>
</section>

<div class="estatistica-container">
    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Aroeira/estatistica/idade.jpeg') }}" alt="Gráfico de idade em Aroeira">
        </div>
        <div class="estatistica-card-info estatistica-card-info--marrom">
            <h2>Idade dos quilombolas</h2>
            <ul>
                <p>A análise da idade dos(as) quilombolas da Comunidade de Aroeira evidencia um perfil composto majoritariamente por adultos em idade produtiva, reforçando a participação ativa nas dinâmicas sociais e culturais da comunidade. As idades variam entre 29 e 71 anos, com média aproximada de 45,5 anos e mediana de 45 anos, indicando uma distribuição relativamente equilibrada em torno dos valores centrais. Observa-se que 50% dos(as) participantes possuem idades entre 32 e 51 anos, concentrando-se principalmente na faixa intermediária da vida adulta. A ausência de valores discrepantes (outliers) sugere homogeneidade na distribuição etária, enquanto a amplitude dos dados revela a presença tanto de indivíduos mais jovens quanto de mais idosos, contribuindo para a diversidade geracional e a preservação dos saberes tradicionais na comunidade.</p>
            </ul>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-info estatistica-card-info--laranja">
            <h2>Tempo de Moradia</h2>
            <ul>
                <p>Quanto ao tempo de moradia dos(as) quilombolas da Comunidade de Aroeira, os dados evidenciam um forte enraizamento territorial dos(as) participantes. A maioria expressiva é composta por moradores(as) nativos(as), representando 83,33% da amostra, o que reforça a continuidade histórica e a preservação das tradições locais. Uma parcela menor, correspondente a 16,67%, reside na comunidade entre 1 e 5 anos. Esses resultados destacam o caráter tradicional da ocupação do território, evidenciando vínculos duradouros com o espaço e a importância da transmissão intergeracional dos saberes e práticas culturais.</p>
            </ul>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Aroeira/estatistica/tempo.jpeg') }}" alt="Atividades econômicas em Aroeira">
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Aroeira/estatistica/escolaridade.jpeg') }}" alt="Escolaridade em Aroeira">
        </div>
        <div class="estatistica-card-info estatistica-card-info--verde">
            <h2>Níveis de Escolaridade</h2>
            <ul>
                <p>No que se refere à escolaridade dos(as) quilombolas da Comunidade de Aroeira, observa-se uma distribuição diversificada dos níveis de instrução, com predominância de participantes com ensino médio incompleto (33,33%). As demais categorias apresentam proporções iguais, sendo 16,67% com ensino fundamental incompleto, 16,67% com ensino fundamental completo, 16,67% com ensino médio completo e 16,67% com ensino superior completo. Esses dados indicam que, embora haja presença de diferentes níveis de escolarização, ainda se destaca uma parcela significativa que não concluiu a educação básica, o que pode refletir desafios relacionados ao acesso, permanência e continuidade nos estudos formais ao longo do tempo.</p>
            </ul>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-info estatistica-card-info--amarelo">
            <h2>Raça</h2>
            <ul>
                <p>No que se refere à raça/cor dos(as) participantes da Comunidade Quilombola de Aroeira, observa-se que 100% dos(as) entrevistados(as) se autodeclararam pretos(as), não havendo registros de outras categorias ou de não declaração. Esse resultado reafirma de forma expressiva a identidade étnico-racial da comunidade, evidenciando seu pertencimento histórico ao contexto quilombola e fortalecendo a valorização de suas origens, cultura e ancestralidade.</p>
            </ul>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Aroeira/estatistica/raca.jpeg') }}" alt="Tempo de moradia em Aroeira">
        </div>
    </section>
</div>
@endsection
