<?php

$ano = $_POST['ano'];
$calcul1 = $ano%4;
$calcul2 = $ano%100;
$calcul3 = $ano%400;

if($calcul1 ==0 && $calcul2 =! 0){
    echo "O ano $ano é bissexto!";
}
else if($calcul3 == 0){
    echo "O ano $ano é bissexto!";
}
?>