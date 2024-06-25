<?php
$numer = $_GET['num'];
$n = 0;
while($i<=10){
    $calcul = $numer *$n;
    echo "$numer X $n = $calcul<br>";
    $n++;
}
    echo "<br>";
?>