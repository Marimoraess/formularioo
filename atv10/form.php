<?php
$qtdpeq = $_GET['qtdpqe'];
$qtdmedia = $_GET['qtdmedia'];
$qtdgrand = $_GET['qtdgrand'];

$totalpeq= $qtdpeq * 10;
$totalmedia = $qtdmedia * 12;
$totalgrand = $qtdgrand * 15;

$totalVend = $totalpeq + $totalmedia + $totalgrand;

echo "Valor total: R$ ".$totalVed;
?>