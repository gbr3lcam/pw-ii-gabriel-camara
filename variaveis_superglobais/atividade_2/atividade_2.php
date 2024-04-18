<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h2>DS:</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['opcao']) && isset($_POST['preferencias']) && isset($_POST['texto'])) {
            echo "sua linguagem favorita é " . $_POST['opcao'] . "<br>";
            foreach($_POST['preferencias'] as $preferencia) {
                echo "você gosta de programar " . $preferencia . " ";
            }
            echo "<br>e em ds, você gosta de " . $_POST['texto'] . "<br>";
        }
    } else {
        echo "responde primeiro ne";
    }
    ?>
</body>
</html>