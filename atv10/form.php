<?php
$qtdpequena = $_GET['qtdpequena'];
$qtdmedia = $_GET['qtdmedia'];
$qtdgrande = $_GET['qtdgrande'];

$totalpequena = $qtdpequena * 10;
$totalmedia = $qtdmedia * 12;
$totalgrande = $qtdgrande * 15;

$totalvenda = $totalpequena + $totalmedia + $totalgrande;

echo "Valor arrecadado: R$ ".$totalvenda;
?>