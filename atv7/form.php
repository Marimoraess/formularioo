<?php

    $nome =$_POST['nome'];
    $idade = $_POST['idade'];

  
    $dias = $idade * 365;

    echo  "você viveu aproximadamente " . $dias . " dias.";

?>