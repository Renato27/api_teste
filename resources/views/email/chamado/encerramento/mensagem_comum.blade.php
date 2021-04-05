<h2 class="titulo_comum">Olá {{isset($chamado->contato->nome) ? $chamado->contato->nome : $chamado->venda->contato->nome}},</h2>

<p>
    Seu chamado de {{$chamado->tipo->nomeTipoChamado}}</strong>, registrado com o n° <strong>{{$chamado->idchamados}}</strong>, foi encerrado em nosso sistema.
    Verifique o mesmo e, caso existam pendências, entre em contato. <br/>
    Abaixo o detalhamento do atendimento:
</p>

@if(count($chamado->detalhesTecnicos) > 0)
    <p>
        <strong>Observações:</strong> <br/><br/>

        @php $key = 1 @endphp

        @foreach($chamado->detalhesTecnicos as $detalhe)
            @if($detalhe->tipo_detalhe_id == 2)
                <strong>{{$key}}<strong> - {{$detalhe->mensagem}} - <i>por {{$detalhe->usuario->funcionario->nome}}</i>
                <br/>
                @php $key += 1 @endphp
            @endif
        @endforeach
    </p>
@endif

@if(!is_null($chamado->pendencias))
    <p>
        <strong>Pendências:</strong> <br/><br/>
        {{$chamado->pendencias}}
    </p>
@endif
