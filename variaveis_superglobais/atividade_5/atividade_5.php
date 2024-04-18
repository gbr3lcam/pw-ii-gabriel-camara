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
        if (isset($_POST['salario_fixo']) && isset($_POST['vendas'])) {
            if (is_numeric($_POST['salario_fixo']) && is_numeric($_POST['vendas'])) {

                $salario_fixo = $_POST['salario_fixo'];
                $vendas = $_POST['vendas'];
                $comissao = 0.04 * $vendas;
                $salario_final = $salario_fixo + $comissao;

                echo "Seu salário fixo é: R$ " . number_format($salario_fixo, 2, ',', '.') . "<br>";
                echo "Total de vendas: R$ " . number_format($vendas, 2, ',', '.') . "<br>";
                echo "Comissão: R$ " . number_format($comissao, 2, ',', '.') . "<br>";
                echo "Salário total: R$ " . number_format($salario_final, 2, ',', '.');
            } else {
                echo "Valores inválidos.";
            }
        } else {
            echo "Preencha todos os campos.";
        }
    } else {
        echo "Nenhum dado enviado.";
    }
    ?>
</body>
</html>