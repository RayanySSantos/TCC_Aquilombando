@extends('layouts.app')

@section('content')
<section class="estatistica-hero">
    <div class="estatistica-hero-container">
        <h1>Estatísticas da Comunidade Quilombola de Vargem Comprida</h1>
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
            <h2>Raça</h2>
            <p>Todos os participantes da pesquisa se identificaram como pretos(as), representando 100% da amostra. Esse resultado confirma a identidade quilombola da Comunidade de Vargem Comprida e reforça sua origem histórica e cultural.</p>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Comprida/estatistica/raça.png') }}" alt="Raça em Vargem Comprida">
            <span class="estatistica-legenda">Autodeclaração racial da comunidade.</span>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Comprida/estatistica/preparação de alimento.png') }}" alt="Preparação de alimento em Vargem Comprida">
            <span class="estatistica-legenda">Preparação de alimento (BPF).</span>
        </div>
        <div class="estatistica-card-info estatistica-card-info--marrom">
            <h2>Preparação de Alimento</h2>
            <p>No que se refere às Boas Práticas de Fabricação (BPF), os resultados mostram que 80% dos(as) participantes afirmaram aplicar essas práticas na preparação dos alimentos. Por outro lado, 20% informaram que nunca ouviram falar sobre o tema. Esses dados revelam um cenário positivo quanto à adoção das BPF pela maioria da comunidade, mas também apontam para lacunas no acesso à informação e à formação técnica, especialmente entre aqueles que desconhecem essas práticas.</p>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-info estatistica-card-info--laranja">
            <h2>Capacitação em Práticas Sustentáveis</h2>
            <p>Os dados analisados indicam que a maioria dos(as) quilombolas da Comunidade de Vargem Comprida já teve algum contato com ações de capacitação voltadas às práticas sustentáveis na produção de alimentos. Observa-se que 60% dos(as) participantes relataram já ter participado desse tipo de formação, enquanto 40% afirmaram nunca ter tido acesso a capacitações nessa área. Esse resultado demonstra que, embora parte da comunidade já esteja inserida em processos formativos, ainda há um percentual significativo de pessoas que permanecem à margem dessas iniciativas, evidenciando a necessidade de ampliação das ações de qualificação.</p>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Comprida/estatistica/Capacitação em Práticas Sustentáveis.png') }}" alt="Capacitação em práticas sustentáveis em Vargem Comprida">
            <span class="estatistica-legenda">Participação em capacitações sustentáveis.</span>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Comprida/estatistica/dificuldades.png') }}" alt="Dificuldades enfrentadas na aplicação em Vargem Comprida">
            <span class="estatistica-legenda">Dificuldades enfrentadas na aplicação.</span>
        </div>
        <div class="estatistica-card-info estatistica-card-info--verde">
            <h2>Dificuldades Encontradas</h2>
            <p>Quando analisadas as dificuldades enfrentadas na aplicação das Boas Práticas de Fabricação, verifica-se que a principal limitação está relacionada às condições materiais. A falta de recursos, como equipamentos adequados e espaço físico apropriado, foi mencionada por 80% dos(as) participantes. A falta de conhecimento e a opção “não sei” apareceram com 10% cada, indicando que, embora o conhecimento técnico seja relevante, os entraves estruturais se configuram como o principal obstáculo para a efetiva aplicação das BPF no contexto comunitário</p>
        </div>
    </section>
</div>
@endsection
