<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['altura']) && is_numeric($_POST['altura']) && $_POST['altura'] > 0) {

            $altura = $_POST['altura'];
            $peso_ideal = 72.7 * $altura - 58;

            echo "Sua altura: " . $altura . "m.<br>";
            echo "Seu peso ideal: " . $peso_ideal . "kg.";
        } else {
            echo "Altura inválida";
        }
    } else {
        echo "Nenhuma altura enviada.";
    }
    ?>
</body>
</html>