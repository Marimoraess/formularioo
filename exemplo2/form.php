
    <?php
        $veloc = $_POST['veloc'];
        $dist= $_POST['dist'];
        $cons = $_POST['cons'];
        
        $horas = number_format($dist/$veloc, 2, ".", " ");
        $comb = number_format($dist/$cons, 2, ".", " ");
        
        echo "Total horas: $horas\n";
        echo "Total combustivel: $comb\n";
    ?>
