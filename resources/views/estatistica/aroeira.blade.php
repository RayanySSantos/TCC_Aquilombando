@extends('layouts.app')

@section('content')
<section class="estatistica-hero">
    <div class="estatistica-hero-container">
        <h1>Estatísticas da Comunidade Quilombola de Aroeira</h1>
        <p>Dados gerais para apoiar a leitura do território. Os textos podem ser ajustados depois.</p>
    </div>
</section>

<div class="estatistica-container">
    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Alta/estatistica/') }}" alt="Gráfico de idade em Aroeira">
        </div>
        <div class="estatistica-card-info estatistica-card-info--marrom">
            <h2>Demografia da Comunidade</h2>
            <p>Resumo curto sobre a população e distribuição etária. Texto provisório.</p>
            <ul>
                <li>População total: 480</li>
                <li>Famílias: 120</li>
                <li>Faixa etária predominante: 20-39</li>
            </ul>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-info estatistica-card-info--laranja">
            <h2>Atividades Econômicas</h2>
            <p>Texto curto sobre a base econômica local e a distribuição das atividades.</p>
            <ul>
                <li>Agricultura: 45%</li>
                <li>Artesanato: 25%</li>
                <li>Comércio local: 15%</li>
                <li>Serviços: 10%</li>
                <li>Outros: 5%</li>
            </ul>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Alta/estatistica/') }}" alt="Atividades econômicas em Aroeira">
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Alta/estatistica/') }}" alt="Escolaridade em Aroeira">
        </div>
        <div class="estatistica-card-info estatistica-card-info--verde">
            <h2>Níveis de Escolaridade</h2>
            <p>Resumo curto sobre escolaridade na comunidade. Texto provisório.</p>
            <div class="estatistica-box">
                Conteúdo editável sobre avanços e desafios educacionais.
            </div>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-info estatistica-card-info--amarelo">
            <h2>Tempo de Moradia</h2>
            <p>Breve descrição sobre tempo de permanência das famílias. Texto provisório.</p>
            <ul>
                <li>Até 5 anos</li>
                <li>6 a 15 anos</li>
                <li>Mais de 15 anos</li>
            </ul>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Vargem Alta/estatistica/') }}" alt="Tempo de moradia em Aroeira">
        </div>
    </section>
</div>
@endsection
