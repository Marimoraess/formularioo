<?php

$text = $_GET['text'];
$area = $_GET['area'];
$op = $_GET['opcao'];
$opt1 = $_GET['opt1'];
$opt2 = $_GET['opt2'];
$opt3 = $_GET['opt3'];
$q = $_GET['quando'];

echo "Autor: $text<br>";
echo "<br>";
echo "Publicação: $area<br>";
echo "<br>";
echo "Vai ser publicado como: $op<br>";
echo "<br>";
echo "Vai ser publicado em: <br> $opt1<br> $opt2<br> $opt3<br>";
echo "Vai ser publicado: $q<br>";
?>
