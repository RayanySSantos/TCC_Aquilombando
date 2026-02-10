@extends('layouts.app')

@section('content')
<section class="estatistica-hero">
    <div class="estatistica-hero-container">
        <h1>Estatísticas da Comunidade Quilombola de Quilombo de Boi</h1>
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

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Boi/estatistica/aplicação de bff na preparação dos alimentos.png') }}" alt="Preparação de alimento em Quilombo de Boi">
            <span class="estatistica-legenda">Preparação de alimento (BPF).</span>
        </div>
        <div class="estatistica-card-info estatistica-card-info--marrom">
            <h2>Preparação de Alimento</h2>
            <p>No que se refere às Boas Práticas de Fabricação (BPF), observa-se um cenário heterogêneo. Metade dos(as) participantes afirma aplicar essas práticas na preparação dos alimentos, enquanto uma parcela expressiva relata nunca ter ouvido falar sobre o tema. Outros(as) indicam aplicação parcial das BPF, o que demonstra que, embora existam iniciativas e conhecimentos pontuais, ainda há necessidade de ampliar ações de orientação, sensibilização e capacitação sobre segurança alimentar e práticas sanitárias adequadas</p>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-info estatistica-card-info--laranja">
            <h2>Capacitação em Práticas Sustentáveis</h2>
            <p>Os dados relacionados à qualificação e capacitação evidenciam uma limitação significativa no acesso a ações formativas na Comunidade Quilombola de Boi. A grande maioria dos(as) participantes (90%) informou não ter participado de capacitações voltadas às práticas sustentáveis na produção de alimentos, enquanto apenas uma pequena parcela relatou já ter tido acesso a esse tipo de formação. Esse cenário aponta para uma lacuna importante no campo da educação técnica e da qualificação produtiva no território.</p>
        </div>
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Boi/estatistica/paretricpação em capacitaçãoi, alimentos.png') }}" alt="Capacitação em práticas sustentáveis em Quilombo de Boi">
            <span class="estatistica-legenda">Participação em capacitações sustentáveis.</span>
        </div>
    </section>

    <section class="estatistica-card estatistica-card--duo">
        <div class="estatistica-card-grafico">
            <img src="{{ asset('images/Boi/estatistica/dificuldades enfrentadas na aplicação das bpfs.png') }}" alt="Dificuldades enfrentadas na aplicação em Quilombo de Boi">
            <span class="estatistica-legenda">Dificuldades enfrentadas na aplicação.</span>
        </div>
        <div class="estatistica-card-info estatistica-card-info--verde">
            <h2>Dificuldades Encontradas</h2>
            <p>As dificuldades enfrentadas na aplicação das Boas Práticas de Fabricação estão associadas principalmente à falta de conhecimento, apontada como o principal obstáculo pelos(as) participantes. Além disso, são mencionadas limitações relacionadas à falta de recursos materiais e à combinação entre carência de informações e condições estruturais inadequadas, evidenciando que os desafios envolvem tanto aspectos formativos quanto infraestruturais.</p>
        </div>
    </section>
</div>
@endsection
