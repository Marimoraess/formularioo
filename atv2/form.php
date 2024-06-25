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
echo "Acompanhantes: $area<br>";
echo "<br>";
echo "Forma de Pagamento:: $op<br>";
echo "<br>";
echo "O(s) ser4viços: <br> $opt1<br> $opt2<br> $opt3<br>";
echo "Quando irá: $q<br>";
?>
