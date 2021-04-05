<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style type="text/css">
     * { margin: 0; padding: 0; font-size: 100%; font-family: 'Avenir Next', "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; line-height: 1.65; }

        img { max-width: 100%; margin: 0 auto; display: block; }

        body, .body-wrap { width: 100% !important; height: 100%; background: #f8f8f8; }

        a { color: #013655; text-decoration: none; }

        a:hover { text-decoration: underline; }

        .text-center { text-align: center; }

        .text-right { text-align: right; }

        .text-left { text-align: left; }

        .button { display: inline-block; color: white; background: #013655; border: solid #013655; border-width: 10px 20px 8px; font-weight: bold; border-radius: 4px; }

        .button a{ color:white; }

        .button:hover { text-decoration: none; }

        h1, h2, h3, h4, h5, h6 { margin-bottom: 20px; line-height: 1.25; }

        h1 { font-size: 32px; }

        h2 { font-size: 28px; }

        h3 { font-size: 24px; }

        h4 { font-size: 20px; }

        h5 { font-size: 16px; }

        p, ul, ol { font-size: 16px; font-weight: normal; margin-bottom: 20px; }

        .container { display: block !important; clear: both !important; margin: 0 auto !important; max-width: 580px !important; }

        .container table { width: 100% !important; border-collapse: collapse; }

        .container .masthead { padding: 80px 0; background: #013655; color: white; }

        .container .masthead h1 { margin: 0 auto !important; max-width: 90%; text-transform: uppercase; }

        .container .content { background: white; padding: 30px 35px; }

        .container .content.footer { background: none; }

        .container .content.footer p { margin-bottom: 0; color: #888; text-align: center; font-size: 14px; }

        .container .content.footer a { color: #888; text-decoration: none; font-weight: bold; }

        .container .content.footer a:hover { text-decoration: underline; }
    </style>
</head>
<body>
<table class="body-wrap">
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td align="center" class="masthead">

                        <h1>Usuário Cadastrado</h1>

                    </td>
                </tr>
                <tr>
                    <td class="content">

                        <h2>Olá {{$usuario->contato->nome}},</h2>

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

                        <p>Agradecemos sua colaboração e colocamo-nos à disposição para mais informações.</p>

                        <table>
                            <tr>
                                <td align="center">
                                    <p>
                                        <a href="https://painel.intranetlogica.com.br" class="button">Acessar Painel</a>
                                    </p>
                                </td>
                            </tr>
                        </table>

                        <h6 style="font-size: 10px">Recomendamos o uso de navegadores como Google Chrome, Mozilla Firefox ou Opera.</h6>

                        <p>
                            Atenciosamente,
                        </p>
                        <p>
                            Suporte Técnico<br/>
                            Lógica Tecnologia<br/>
                            (21) 2223-1939
                        </p>

                    </td>
                </tr>
            </table>

        </td>
    </tr>

</table>
</body>
</html>
