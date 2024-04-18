<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php
    if(isset($_POST['num1']) && isset($_POST['num2'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        echo "Soma: " . ($num1 + $num2) . "<br>";
        echo "Subtração: " . ($num1 - $num2) . "<br>";
        echo "Multiplicação: " . ($num1 * $num2) . "<br>";

        if($num2 != 0 || $num1 != 0){
            echo "Divisão: " . ($num1/$num2) . ".<br>";
         }
        else{
             echo "Impossível divisão por 0";
         }
     } else {
        echo "Insira números antes de calcular";
    }
    ?>

</body>

</html>