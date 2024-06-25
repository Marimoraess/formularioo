<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacao = $_POST['operacao'];

    switch ($operacao) {
        case 'somar':
            $resultado = $numero1 + $numero2;
            $operacaoTexto = "soma";
            break;
        case 'subtrair':
            $resultado = $numero1 - $numero2;
            $operacaoTexto = "subtração";
            break;
        case 'dividir':
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
                $operacaoTexto = "divisão";
            } else {
                $resultado = "Erro: Divisão por zero!";
                $operacaoTexto = "divisão";
            }
            break;
        case 'multiplicar':
            $resultado = $numero1 * $numero2;
            $operacaoTexto = "multiplicação";
            break;
        default:
            $resultado = "Operação inválida";
            $operacaoTexto = "";
    }

    echo "<h2>Resultado da " . $operacaoTexto . ": " . $resultado . "</h2>";
} else {
    echo "Método de requisição inválido.";
}
?>