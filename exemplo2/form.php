<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3107 Beecrowd</title>
</head>
<body>
    <?php
        $veloc = $_POST['veloc'];
        $dist= $_POST['dist'];
        $cons = $_POST['cons'];
        
        $horas = number_format($dist/$veloc, 2, ".", " ");
        $comb = number_format($dist/$cons, 2, ".", " ");
        
        echo "Total horas: $horas\n";
        echo "Total combustivel: $comb\n";
    ?>
</body>
</html>