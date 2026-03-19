@extends('layouts.app')

@section('content')
<section class="estatistica-hero">
    <div class="estatistica-hero-container">
        <h1>Perfil dos participantes da comunidade Lagoa dos Anjos do projeto Mapeamento Gastronômico: o resgate dos saberes culinários quilombolas no Território Sertão Produtivo</h1>
    </div>
</section>

<div class="estatistica-container">
    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Lagoa dos Anjos/estatistica/idade.jpeg') }}" alt="Gráfico de idade em Lagoa dos Anjos">
        </div>
        <div class="estatistica-card-info estatistica-card-info--marrom">
            <h2>Idade dos quilombolas</h2>
            <ul>
                <p>A análise da idade dos(as) quilombolas da Comunidade de Lagoa dos Anjos revela um perfil etário mais concentrado em faixas adultas, indicando predominância de indivíduos em idade produtiva. As idades variam entre 50 e 68 anos, com média aproximada de 53,67 anos e mediana de 54,5 anos, demonstrando uma distribuição relativamente homogênea e centrada em valores mais elevados. Observa-se que 50% dos(as) participantes possuem idades entre 50 e 59 anos, evidenciando concentração na faixa intermediária da vida adulta. A presença de um valor abaixo do limite inferior esperado sugere a existência de um possível outlier, enquanto, de modo geral, os dados indicam baixa variabilidade e reforçam a presença de indivíduos com forte vivência e experiência dentro da comunidade, contribuindo para a preservação dos saberes e tradições locais.</p>
            </ul>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-info estatistica-card-info--laranja">
            <h2>Tempo de Moradia</h2>
            <ul>
                <li>Agricultura: 45%</li>
                <li>Artesanato: 25%</li>
                <li>Comércio local: 15%</li>
                <li>Serviços: 10%</li>
                <li>Outros: 5%</li>
            </ul>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Lagoa dos Anjos/estatistica/escolaridade.jpeg') }}" alt="Atividades econômicas em Lagoa dos Anjos">
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Alta/estatistica/') }}" alt="Escolaridade em Lagoa dos Anjos">
        </div>
        <div class="estatistica-card-info estatistica-card-info--verde">
            <h2>Níveis de Escolaridade</h2>
            <ul>
                <p>
                A análise da escolaridade dos(as) quilombolas da Comunidade de Lagoa dos Anjos evidencia um cenário marcado pela predominância de baixa escolarização, com a maior parte dos(as) participantes apresentando ensino fundamental incompleto (83,33%), o que indica limitações no acesso e na continuidade dos estudos formais. Por outro lado, uma parcela menor concluiu o ensino médio (16,67%), demonstrando que, embora existam avanços pontuais, ainda persistem desafios significativos relacionados à permanência no sistema educacional. Nesse contexto, a ausência de níveis mais elevados de escolaridade reforça a necessidade de políticas públicas voltadas à ampliação do acesso à educação e à redução das desigualdades educacionais na comunidade.
                </p>
            </ul>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-info estatistica-card-info--amarelo">
            <h2>Raça</h2>
            <ul>
                <p>
                A análise da auto declaração de raça/cor dos(as) quilombolas da Comunidade de Lagoa dos Anjos revela a predominância de indivíduos que se autodeclaram pretos(as), correspondendo a 60% da amostra, enquanto 40% se identificam como pardos(as). Esses dados evidenciam a forte presença de identidades étnico-raciais historicamente associadas às comunidades quilombolas, reforçando o vínculo com a ancestralidade afro-brasileira. A distribuição observada demonstra a diversidade interna da comunidade, ao mesmo tempo em que reafirma sua identidade coletiva e pertencimento étnico, aspectos fundamentais para a valorização cultural e para o fortalecimento das políticas de reconhecimento e inclusão social.
                </p>
            </ul>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Lagoa dos Anjos/estatistica/raca.jpeg') }}" alt="Tempo de moradia em Lagoa dos Anjos">
        </div>
    </section>
</div>
@endsection
