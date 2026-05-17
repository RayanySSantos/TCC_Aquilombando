@extends('layouts.app')

@section('content')
<section class="estatistica-hero">
    <div class="estatistica-hero-container">
        <div class="estatistica-contexto">
            <p>O questionário foi aplicado no contexto do projeto Mapeamento Gastronômico: o resgate dos saberes culinários quilombolas no Território Sertão Produtivo, desenvolvido junto à Comunidade Quilombola de Passagem de Areia. A coleta de dados integrou as ações da pesquisa, com o objetivo de compreender o perfil dos(as) participantes e sua relação com os saberes e práticas do cotidiano. Ao todo, participaram do estudo 6 moradores da comunidade, que contribuíram diretamente com as atividades do projeto. As informações obtidas permitem traçar um panorama do perfil dos participantes e fundamentam as análises apresentadas a seguir.</p>
        </div>
        <h1>Perfil dos(as) participantes – Quilombo Passagem de Areia</h1>
    </div>
</section>

<div class="estatistica-container">
    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Passagem/estatistica/idade.png') }}" alt="Gráfico de idade em Passagem de Areia">
            <span class="estatistica-legenda">Distribuição etária da comunidade.</span>
        </div>
        <div class="estatistica-card-info estatistica-card-info--marrom">
            <h2>Idade dos quilombolas</h2>
            <p>A análise do perfil sociodemográfico dos(as) quilombolas da Comunidade de Passagem de Areia evidencia um grupo composto majoritariamente por adultos em idade economicamente ativa. As idades variam entre 28 e 58 anos, com mediana de 37 anos e média aproximada de 43,1 anos, indicando a presença significativa de pessoas inseridas nas dinâmicas produtivas, sociais e culturais da comunidade. Observa-se maior concentração etária entre 32 e 46 anos, o que reforça a participação ativa desse grupo na manutenção das práticas tradicionais e no cotidiano comunitário.</p>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-info estatistica-card-info--laranja">
            <h2>Tempo de Moradia</h2>
            <p>Quanto ao tempo de residência, os dados revelam forte vínculo territorial. A maioria dos(as) participantes reside na comunidade há mais de 10 anos (66,67%), enquanto os demais se declaram nativos(as) do território (33,33%). Não foram registrados moradores com menos de 10 anos de residência, o que reforça a estabilidade populacional e a continuidade histórica da ocupação do território quilombola.</p>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Passagem/estatistica/mora.png') }}" alt="Tempo de moradia em Passagem de Areia">
            <span class="estatistica-legenda">Tempo de permanência das famílias na comunidade.</span>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Passagem/estatistica/escolaridade.png') }}" alt="Escolaridade em Passagem de Areia">
            <span class="estatistica-legenda">Níveis de escolaridade declarados.</span>
        </div>
        <div class="estatistica-card-info estatistica-card-info--verde">
            <h2>Níveis de Escolaridade</h2>
            <p>No que se refere à escolaridade, observa-se concentração nos níveis de ensino fundamental incompleto e ensino médio incompleto, ambos correspondendo a 40% dos(as) participantes. Uma parcela menor (20%) concluiu o ensino médio, não havendo registros de ensino fundamental completo ou ensino superior. Esses dados evidenciam limitações no acesso e na permanência nos níveis mais elevados de escolarização, refletindo desafios estruturais enfrentados pela comunidade.</p>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-info estatistica-card-info--amarelo">
            <h2>Autodeclaração étnico-racial</h2>
            <p>Todos os(as) participantes se autodeclararam pretos(as), representando 100% da amostra. Esse resultado reafirma a identidade negra da Comunidade Quilombola de Passagem de Areia e reforça o pertencimento étnico-racial que caracteriza historicamente os territórios quilombolas..</p>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Passagem/estatistica/raçaa.png') }}" alt="Raça em Passagem de Areia">
            <span class="estatistica-legenda">Autodeclaração racial da comunidade.</span>
        </div>
    </section>

   
</div>
@endsection
