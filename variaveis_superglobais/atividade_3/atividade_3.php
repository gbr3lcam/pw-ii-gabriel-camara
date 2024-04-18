<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if(isset($_POST['nome'])) {
            echo "Seu nome: " . $_POST['nome'] . "<br>";
        }

        if(isset($_POST['idade'])) {
            echo "Sua idade: " . $_POST['idade'] . "<br>";
        }

        if(isset($_POST['senha'])) {
            echo "Sua senha: " . $_POST['senha'] . "<br>";
        }

        if(isset($_POST['profissao'])) {
            echo "Sua profissão: " . $_POST['profissao'] . "<br>";
        }

        if(isset($_POST['descricao'])) {
            echo "Descrição da profissão: " . $_POST['descricao'] . "<br>";
        }
    } else {
        echo "Nenhum dado enviado.";
    }
    ?>
</body>
</html>