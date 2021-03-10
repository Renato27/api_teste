@extends('email.chamado.interacoes.layout')

@section('corpo')
<div class="terceiro"></div>

<h2 class="titulo_comum">Olá {{$chamado->contato->nome}},</h2>

<p>
    Seu chamado de suporte</strong>, registrado com o n° <strong>{{$chamado->idchamados}}</strong>, recebeu uma nova interação.<br/>
    <br/>
    O técnico {{$interacao->tecnico->funcionario->nome}} escreveu: <i>{{$interacao->detalhes}}</i><br/>
    O atendimento foi realizado entre {{\Carbon\Carbon::parse($interacao->inicio)->format('d/m/Y H:i:s')}} e {{\Carbon\Carbon::parse($interacao->fim)->format('d/m/Y H:i:s')}}
    <br/><br/>
    Acesse o <a style="text-decoration: underline;" target="_blank" href="https://painel.intranetlogica.com.br">painel Lógica</a> e verifique.
</p>

@endif

@endsection
