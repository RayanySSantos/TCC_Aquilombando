@extends('layouts.app')

@section('content')
<section class="estatistica-hero">
    <div class="estatistica-hero-container">
        <h1>Estatísticas da Comunidade Quilombola de Passagem de Areia</h1>
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
            <h2>Raça</h2>
            <p>Todos os(as) participantes se autodeclararam pretos(as), representando 100% da amostra. Esse resultado reafirma a identidade negra da Comunidade Quilombola de Passagem de Areia e reforça o pertencimento étnico-racial que caracteriza historicamente os territórios quilombolas..</p>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Passagem/estatistica/raçaa.png') }}" alt="Raça em Passagem de Areia">
            <span class="estatistica-legenda">Autodeclaração racial da comunidade.</span>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Passagem/estatistica/aplicxação na preparação de alimentos.png') }}" alt="Preparação de alimento em Passagem de Areia">
            <span class="estatistica-legenda">Preparação de alimento (BPF).</span>
        </div>
        <div class="estatistica-card-info estatistica-card-info--marrom">
            <h2>Preparação de Alimento</h2>
            <p>No que se refere às Boas Práticas de Fabricação (BPF), observa-se um nível significativo de adesão entre os(as) participantes. A maior parte (83,33%) afirmou aplicar as BPF na preparação dos alimentos, enquanto 16,67% relataram aplicação parcial. Não houve registros de participantes que nunca ouviram falar sobre o tema, indicando que as BPF são reconhecidas na comunidade, ainda que existam limitações para sua aplicação plena.</p>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-info estatistica-card-info--laranja">
            <h2>Capacitação em Práticas Sustentáveis</h2>
            <p>Os dados relacionados à qualificação e à capacitação indicam um acesso limitado a ações formativas voltadas às práticas sustentáveis na produção de alimentos na Comunidade Quilombola de Passagem de Areia. A maioria dos(as) participantes (83,33%) informou não ter participado de capacitações nessa área, enquanto apenas 16,67% relataram já ter tido acesso a esse tipo de formação. Esse cenário evidencia a necessidade de ampliação de políticas públicas e projetos voltados à qualificação técnica e ao fortalecimento das práticas sustentáveis no território.</p>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Passagem/estatistica/participação na capcitação de alimentos.png') }}" alt="Capacitação em práticas sustentáveis em Passagem de Areia">
            <span class="estatistica-legenda">Participação em capacitações sustentáveis.</span>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Passagem/estatistica/dificuldades enfrentadas na aplicação de bpf.png') }}" alt="Dificuldades enfrentadas na aplicação em Passagem de Areia">
            <span class="estatistica-legenda">Dificuldades enfrentadas na aplicação.</span>
        </div>
        <div class="estatistica-card-info estatistica-card-info--verde">
            <h2>Dificuldades Encontradas</h2>
            <p>Ao analisar as dificuldades enfrentadas na adoção das Boas Práticas de Fabricação, verifica-se que todos(as) os(as) participantes (100%) atribuíram essas dificuldades à falta de recursos materiais e estruturais, como equipamentos adequados, espaço físico e infraestrutura. Esse resultado evidencia que o principal obstáculo à plena implementação das BPF na Comunidade de Passagem de Areia não está relacionado ao desconhecimento, mas às condições materiais disponíveis, reforçando a necessidade de investimentos e apoio institucional.</p>
        </div>
    </section>
</div>
@endsection
