<?php
    if (isset($_POST["send"])) {
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $tipoPessoa = $_POST["tipopessoa"];
        $pessoasNumero = $_POST["pessoasNumero"];
        $mensagem = $_POST["mensagem"];
        $data_envio = date('d/m/Y');
        $hora_envio = date('H:i');
    }

    $file = "
        <style type='text/css'>
            body {
                margin: 0px;
                font-family: Verdana;
                font-size: 12px;
                color: #666666;                
            }

            a {
                color: #666666;
                text-decoration: none;
            }

            a:hover {
                color: #FF00000;
                text-decoration: none;
            }
        </style>
        <html>
            <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#FFF'>
                <tr>
                    <td>
                    <tr>
                        <td width='500'>Nome:$nome</td>
                    </tr>
                    <tr>
                        <td width='320'>Telefone:$telefone</td>
                    </tr>
                    <tr>
                        <td width='320'>E-mail:$email</td>
                    </tr>
                    <tr>
                        <td width='320'>Cidade:$cidade</td>
                    </tr>
                    <tr>
                        <td width='320'>Estado:$estado</td>
                    </tr>
                    <tr>
                        <td width='320'>Tipo de Pessoa:$tipoPessoa</td>
                    </tr>
                    <tr>
                        <td width='320'>Número de vidas:$pessoasNumero</td>
                    </tr>
                    <tr>
                        <td width='320'>Mensagem:$mensagem</td>
                    </tr>    
                    </td>
                </tr>
                <tr>
                    <td>Este e-mail foi enviado em $data_envio às $hora_envio</td>
                </tr>
            </table>
        </html>
    ";

    // Enviar E-mail
    
    $emailenviar = "Coloque o seu e-mail aqui";
    $destino = $emailenviar;
    $assunto = "Contato pelo Site";

    // Indicar que o formato do e-mail é HTML
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $headers .= 'From: $nome <$email>';

    $enviaremail = mail($destino, $assunto, $file, $headers);
    if ($enviaremail) {
        $msg = "E-mail enviado com sucesso! <br> Lhe responderemos o mais rápido possível!";
        echo " <meta http-equiv='refresh' content='10;URL=../index.html'>";
    } else {
        $msg = "Erro ao enviar E-mail";
        echo "";
    }
?>
