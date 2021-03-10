@extends('email.chamado.encerramento.layout')

@section('corpo')
<div class="terceiro">
    <h3>Usuário Cadastrado</h3>
    <h3>Olá {{$usuario->contato->nome}},</h3>
</div>

<p>
    Visando a melhoria contínua dos nossos serviços e a maior agilidade nos atendimentos,
    solicitamos que os próximos chamados técnicos sejam efetuados através do portal de atendimento localizado no site da Lógica,
    através do link https://painel.intranetlogica.com.br
</p>
<p>
    Neste portal você poderá acompanhar todos os chamados já concluídos, bem como todos os que estão em andamento e terá a possibilidade de nos ajudar a aprimorar nosso atendimento,
    além de ter acesso as notas fiscais e boletos emitidos para sua empresa.
</p>
<p>Abaixo login e senha para o seu primeiro acesso:</p>
<br/>
<p>
    Usuário: {{$usuario->email}}<br/>
    Senha: 123456
</p>
<br/>
<p>Agradecemos sua colaboração e colocamo-nos à disposição para mais informações.</p>

<table>
    <tr>
        <td>
            <p class="centro_button">
                <a href="https://painel.intranetlogica.com.br" class="button" >Acessar Painel</a>
            </p>
        </td>
    </tr>
</table>
@endsection
