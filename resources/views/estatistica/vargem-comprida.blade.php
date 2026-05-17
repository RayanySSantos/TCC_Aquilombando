@extends('layouts.app')

@section('content')
<section class="estatistica-hero">
    <div class="estatistica-hero-container">
        <div class="estatistica-contexto">
            <p>O questionário foi aplicado no contexto do projeto Mapeamento Gastronômico: o resgate dos saberes culinários quilombolas no Território Sertão Produtivo, desenvolvido junto à Comunidade Quilombola de Vargem Comprida. A coleta de dados integrou as ações da pesquisa, com o objetivo de compreender o perfil dos(as) participantes e sua relação com os saberes e práticas do cotidiano. Ao todo, participaram do estudo 10 moradores da comunidade, que contribuíram diretamente com as atividades do projeto. As informações obtidas permitem traçar um panorama do perfil dos participantes e fundamentam as análises apresentadas a seguir.</p>
        </div>
        <h1>Perfil dos(as) participantes – Quilombo Vargem Comprida</h1>
    </div>
</section>

<div class="estatistica-container">
    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Comprida/estatistica/idade.png') }}" alt="Gráfico de idade em Vargem Comprida">
            <span class="estatistica-legenda">Distribuição etária da comunidade.</span>
        </div>
        <div class="estatistica-card-info estatistica-card-info--marrom">
            <h2>Idade dos quilombolas</h2>
            <p>A idade dos(as) participantes variou entre 28 e 58 anos, com mediana de 37 anos e média de 43,1 anos. A maior concentração dos dados ocorreu entre 32 e 46 anos, indicando predominância de adultos em idade produtiva. Observa-se a presença de um valor atípico superior, sugerindo a participação de indivíduos com idade mais elevada.</p>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-info estatistica-card-info--laranja">
            <h2>Tempo de Moradia</h2>
            <p>Observa-se que 70% dos(as) participantes são nativos(as) da comunidade, enquanto 30% residem no quilombo há mais de 10 anos, indicando forte vínculo histórico e territorial da maioria dos(as) respondentes com a Comunidade Quilombola de Vargem Comprida.</p>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Comprida/estatistica/tempo mora.png') }}" alt="Tempo de moradia em Vargem Comprida">
            <span class="estatistica-legenda">Tempo de permanência das famílias na comunidade.</span>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Comprida/estatistica/escolaridade.png') }}" alt="Escolaridade em Vargem Comprida">
            <span class="estatistica-legenda">Níveis de escolaridade declarados.</span>
        </div>
        <div class="estatistica-card-info estatistica-card-info--verde">
            <h2>Níveis de Escolaridade</h2>
            <p>A maioria dos(as) participantes possui ensino fundamental incompleto (37,5%). Também há participantes com ensino médio completo (25%) e ensino superior completo (25%), enquanto uma parcela menor apresenta ensino médio incompleto (12,5%). Esses dados mostram que a comunidade possui pessoas com diferentes níveis de escolaridade, desde baixa escolarização até níveis mais elevados de ensino.</p>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-info estatistica-card-info--amarelo">
            <h2>Autodeclaração étnico-racial</h2>
            <p>Todos os participantes da pesquisa se identificaram como pretos(as), representando 100% da amostra. Esse resultado confirma a identidade quilombola da Comunidade de Vargem Comprida e reforça sua origem histórica e cultural.</p>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Comprida/estatistica/raça.png') }}" alt="Raça em Vargem Comprida">
            <span class="estatistica-legenda">Autodeclaração racial da comunidade.</span>
        </div>
    </section>

    
</div>
@endsection
