<?php

$pront = $_GET['pront'];
$nm = $_GET['nome'];
$id = $_GET['id'];
$p = $_GET['per'];
$me = $_GET['per'];

if($pront == 0 ){
    echo "Prontuário não pode estar em branco<br>";
}
if($nm == 0){
    echo "Nome não pode estar em branco<br>";
}
if($id <=15){
    echo "Idade deve ser um valor entre 15 e 75 anos<br>";
}
if($id >=75){
    echo "Idade deve ser um valor entre 15 e 75 anos<br>";
}
if($p == "V" && $p == "N"){
    echo "Período deve ser V-Vespertino ou N-Noturno<br>";
}
if($me >= 1){
    echo "Módulo pode ser um valor entre 1 e 4<br>";
}
if($me <= 4){
    echo "Módulo pode ser um valor entre 1 e 4<br>";
}
else{
    echo "Todos os dados foram corretamente preenchidos";
}
?>