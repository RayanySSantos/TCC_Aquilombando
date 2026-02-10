@extends('layouts.app')

@section('content')
<section class="estatistica-hero">
    <div class="estatistica-hero-container">
        <h1>Estatísticas da Comunidade Quilombola de Vargem Alta</h1>
       
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
            <h2>Raça</h2>
            <p>Todos os(as) participantes da pesquisa se autodeclararam pretos(as), representando 100% da amostra. Esse resultado reafirma a identidade quilombola da Comunidade de Vargem Alta e reforça sua origem histórica, cultural e étnico-racial.</p>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Alta/estatistica/raça.png') }}" alt="Tempo de moradia em Vargem Alta">
            <span class="estatistica-legenda">Autodeclaração racial da comunidade.</span>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Alta/estatistica/capacitação em praticas sustentaveis.png') }}" alt="Capacitação em práticas sustentáveis em Vargem Alta">
            <span class="estatistica-legenda">Preparação de alimento (BFS).</span>
        </div>
        <div class="estatistica-card-info estatistica-card-info--marrom">
            <h2>Capacitação em Práticas Sustentáveis</h2>
            <p>Os dados analisados indicam que a Comunidade Quilombola de Vargem Alta apresenta um nível significativo de acesso a ações de qualificação relacionadas às práticas sustentáveis na produção de alimentos. A maioria dos(as) participantes (88,89%) informou já ter participado de capacitações nessa área, enquanto uma parcela reduzida (11,11%) relatou não ter tido acesso a esse tipo de formação. Esse resultado sugere a presença de iniciativas formativas na comunidade, embora ainda haja necessidade de ampliar e fortalecer essas ações de forma contínua.</p>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-info estatistica-card-info--laranja">
            <h2>Preparação de Alimento</h2>
            <p>No que se refere às Boas Práticas de Fabricação (BPF), observa-se que a maior parte dos(as) quilombolas afirma aplicar essas práticas na preparação dos alimentos. Do total de participantes, 77,78% relataram aplicação efetiva das BPF, enquanto 22,22% indicaram aplicação parcial. Não houve registros de participantes que nunca ouviram falar sobre o tema, o que evidencia um nível relevante de conhecimento e adesão às práticas sanitárias e de segurança alimentar, ainda que existam aspectos passíveis de aprimoramento.</p>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Alta/estatistica/preparação de alimento bfs.png') }}" alt="Preparação de alimento em Vargem Alta">
            <span class="estatistica-legenda">Participação em capacitações sustentáveis.</span>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Alta/estatistica/dificuldade enfrentada na aplicação.png') }}" alt="Dificuldades enfrentadas na aplicação em Vargem Alta">
            <span class="estatistica-legenda">Dificuldades enfrentadas na aplicação.</span>
        </div>
        <div class="estatistica-card-info estatistica-card-info--verde">
            <h2>Dificuldades Encontradas</h2>
            <p>Ao analisar as dificuldades enfrentadas na aplicação das Boas Práticas de Fabricação, destaca-se a falta de conhecimento como o principal obstáculo, apontado por 55,56% dos(as) participantes. A falta de recursos materiais, como equipamentos e espaço adequado, também foi mencionada por 22,22%, enquanto 11,11% indicaram a combinação entre falta de conhecimento e recursos. Uma parcela equivalente relatou não saber identificar dificuldades específicas. Esses dados evidenciam que, embora exista adesão às BPF, persistem desafios relacionados tanto à formação técnica quanto às condições estruturais disponíveis na comunidade.</p>
        </div>
    </section>
</div>
@endsection
