<?php
$nome =$_GET['nome'];
$horario = $_GET['horario'];

list($h, $min) = explode(':', $horario);

if ($h < 12) {
    echo "Bom dia $nome!<br>";
} elseif ($h < 18) {
    echo "Boa tarde $nome!<br>";
} else {
    echo "Boa noite $nome!<br>";
}
echo "São $h e $min minutos.<br>"
?>
