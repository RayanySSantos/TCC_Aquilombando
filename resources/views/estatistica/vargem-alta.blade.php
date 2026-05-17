@extends('layouts.app')

@section('content')
<section class="estatistica-hero">
    <div class="estatistica-hero-container">
        <div class="estatistica-contexto">
            <p>O questionário foi aplicado no contexto do projeto Mapeamento Gastronômico: o resgate dos saberes culinários quilombolas no Território Sertão Produtivo, desenvolvido junto à Comunidade Quilombola de Vargem Alta. A coleta de dados integrou as ações da pesquisa, com o objetivo de compreender o perfil dos(as) participantes e sua relação com os saberes e práticas do cotidiano. Ao todo, participaram do estudo 9 moradores da comunidade, que contribuíram diretamente com as atividades do projeto. As informações obtidas permitem traçar um panorama do perfil dos participantes e fundamentam as análises apresentadas a seguir.</p>
        </div>
        <h1>Perfil dos(as) participantes – Quilombo Vargem Alta</h1>
    </div>
</section>

<div class="estatistica-container">
    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Alta/estatistica/idade.png') }}" alt="Gráfico de idade em Vargem Alta">
            <span class="estatistica-legenda">Distribuição etária da comunidade.</span>
        </div>
        <div class="estatistica-card-info estatistica-card-info--marrom">
            <h2>Idade dos quilombolas</h2>
            <p>A análise do perfil sociodemográfico dos(as) quilombolas da Comunidade de Vargem Alta revela características que evidenciam o forte vínculo histórico e territorial dos(as) participantes com o quilombo. As idades variam entre 28 e 58 anos, com média aproximada de 43,1 anos e mediana de 37 anos, indicando predominância de adultos em idade produtiva. Observa-se maior concentração de indivíduos entre 32 e 46 anos, o que sugere uma participação ativa de pessoas inseridas nas dinâmicas produtivas e culturais da comunidade.</p>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-info estatistica-card-info--laranja">
            <h2>Tempo de Moradia</h2>
            <p>Quanto ao tempo de residência, os dados demonstram forte enraizamento dos(as) quilombolas no território. A maioria dos(as) participantes reside na comunidade há mais de 10 anos (55,56%), enquanto uma parcela expressiva é composta por moradores(as) nativos(as) (33,33%). Apenas 11,11% residem no quilombo há menos de 10 anos, o que reforça o caráter tradicional da ocupação do território e a continuidade histórica da comunidade.</p>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Alta/estatistica/tempo mora.png') }}" alt="Tempo de moradia em Vargem Alta">
            <span class="estatistica-legenda">Tempo de permanência das famílias na comunidade.</span>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Alta/estatistica/escolaridade.png') }}" alt="Escolaridade em Vargem Alta">
            <span class="estatistica-legenda">Níveis de escolaridade declarados.</span>
        </div>
        <div class="estatistica-card-info estatistica-card-info--verde">
            <h2>Níveis de Escolaridade</h2>
            <p>No que se refere à escolaridade, observa-se predominância de baixa escolarização, com maior concentração de participantes com ensino fundamental incompleto (66,67%). Uma parcela menor concluiu o ensino médio (22,22%) ou não o finalizou (11,11%). Não foram identificados(as) participantes com ensino fundamental completo ou ensino superior completo, o que evidencia desafios relacionados ao acesso e à permanência nos processos formais de educação.</p>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-info estatistica-card-info--amarelo">
            <h2>Autodeclaração étnico-racial</h2>
            <p>Todos os(as) participantes da pesquisa se autodeclararam pretos(as), representando 100% da amostra. Esse resultado reafirma a identidade quilombola da Comunidade de Vargem Alta e reforça sua origem histórica, cultural e étnico-racial.</p>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Alta/estatistica/raça.png') }}" alt="Tempo de moradia em Vargem Alta">
            <span class="estatistica-legenda">Autodeclaração racial da comunidade.</span>
        </div>
    </section>
    
</div>
@endsection
