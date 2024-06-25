<?php
$numer = $_GET['num'];
$n = 0;
while($n<=10){
    $calcul = $numer *$n;
    echo "$numer X $n = $calcul<br>";
    $n++;
}
    echo "<br>";
?>