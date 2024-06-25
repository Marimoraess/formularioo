<?php

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacao = $_POST['operacao'];

    switch ($operacao) {
        case 'somar':
            $resultado = $numero1 + $numero2;
            $oper = "soma";
            break;
        case 'subtrair':
            $resultado = $numero1 - $numero2;
            $oper = "subtração";
            break;
        case 'dividir':
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
                $oper = "divisão";
            } else {
                $resultado = "Erro: Divisão por zero!";
                $oper  = "divisão";
            }
            break;
        case 'multiplicar':
            $resultado = $numero1 * $numero2;
            $oper = "multiplicação";
            break;
       
    }

    echo "<h2>Resultado da " . $oper  . ": " . $resultado . "</h2>";

?>