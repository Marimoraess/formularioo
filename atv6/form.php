<?php
$nm = $_GET['nome'];
$n1 = $_GET['num1'];
$n2 = $_GET['num2'];
$frequencia = $_GET['freq'];
$media = ($n1+$n2)/2;
echo "Nome: $n<br>";
echo "<br>";
echo "Nota 1: $n1<br>";
echo "<br>";
echo "Nota 2: $n2<br>";
echo "<br>";
echo "Frequência: $f<br>";
echo "<br>";
echo "Média: $med<br>";
echo "<br>";

if($media < 5){
    echo "Situação: Reprovado(a) por nota";
    $calc = $n1+$n2;
    }
if($f < 75){
    echo "Situação: Reprovado(a) por frequência";
    }
if($med >= 5 && $f >= 75){
    echo "Situação: Aprovado<br>";
    }

    echo "<br>";
?>
