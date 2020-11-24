<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulário de inscrição</title>
</head>
<body>

    <p style="font-family: Impact;"> FORMULÁRIO DE INSCRIÇÃO PARA COMPETIDORES</p>
    
<form action="script.php" method="POST">
        <?php
            $MensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
            if(!empty($MensagemDeSucesso))
            {
                echo $MensagemDeSucesso;
            }

            $MensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
            if(!empty($MensagemDeErro))
            {
                echo $MensagemDeErro;
            }
        ?>

    <p>Seu nome: <input type="text" name="nome" style="margin-left: 5px;"></p>
    <p>Sua Idade: <input type="text" name="idade" style="margin: 5px;"></p>
    <p><input type="submit" value="Enviar dado do competidor"/></p>
</form>
    
</body>
</html>