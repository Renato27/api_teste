{{-- <!DOCTYPE html> --}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .container {
        border: 1px solid rgb(2, 2, 2, 0.2);
    }

    .primeiro {
        background-color: rgba(122, 171, 236, 0.3);
        width: auto;
        height: 100px;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }

    .segundo{
        text-align: center;
        width: 1em;
    }

    .terceiro{
        text-align: center !important;
        width: 450px;
        margin-left: auto;
        margin-right: auto;
    }

    .imagem {
        width: auto;
        height: auto;
        max-width: 75px;
        max-height: 75px;
        margin-top: 2.5%;
        opacity: .8 !important;
    }

    /*  ^
        |
        |
    Parte de cima do email, imagem  */

    .corpo {
        text-align: center;
    }

    .body-wrap{
        margin-left: auto;
        margin-right: auto;
        font-family: 'Times New Roman', Times, serif;

    }

    .content {
        font-size: 12px;
        text-align: justify;
    }

    .centro_button {
        margin-left: 150px;
        margin-right: 100px;
    }

    .button {
        color: rgb(0, 0, 0);
        background:  rgba(122, 171, 236);
        border: solid rgba(122, 171, 236);
        border-width: 10px 20px 8px;
        font-weight: bold;
        border-radius: 40px;
        text-decoration: none;
        text-align: center !important;
    }

    .button a{
        color:white;
    }

    .button:hover {
        text-decoration: whitesmoke;
    }

    /* PARA TABELA EM CHAMADOS */
    .table {
        border: 1px solid rgb(0, 0, 0, 0.4);
        margin-left: auto;
        margin-right: auto;
        border-radius: 3px;
        height: auto;
        width: 400px;
    }

    .linha {
        /*  border: 1px solid rgb(0, 0, 0); */
        border-bottom: 1px solid rgb(0, 0, 0);
        border-right: 1px solid rgb(0, 0, 0);
    }


    </style>
</head>
<body>

<div class="segundo">
    <table class="body-wrap">
        <tr>
            <td class="container">
                <div class="primeiro">

                        <img class="imagem" src="http://177.86.157.138:8031/public/logica_logo.png" alt="image">

                </div>
                <!-- Message start -->
                <table>

                    <tr>
                        <td class="content">

                            @yield('corpo')

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
</div>

</body>
</html>
