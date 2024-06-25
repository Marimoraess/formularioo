<?php
$nm = $_GET['nome'];
$n1 = $_GET['num1'];
$n2 = $_GET['num2'];
$frequencia = $_GET['freq'];
$media = ($n1+$n2)/2;
echo "Nome: $nm<br>";
echo "<br>";
echo "Nota 1: $n1<br>";
echo "<br>";
echo "Nota 2: $n2<br>";
echo "<br>";
echo "Frequência: $frequencia<br>";
echo "<br>";
echo "Média: $media<br>";
echo "<br>";

if($media < 5){
    echo "Situação: Reprovado(a) por nota";
    $calc = $n1+$n2;
    }
if($frequencia < 75){
    echo "Situação: Reprovado(a) por frequência";
    }
if($media >= 5 && $frequencia >= 75){
    echo "Situação: Aprovado<br>";
    }

    echo "<br>";
?>
