<?php
    //CICLOS
    $num = 1;
    print "<span style='color:red;'>Ejemplo while:</span><br>";
    while ($num <= 10) {
        echo 'numero: ', $num, '<br>';
        $num++;
    }
    print "<br><span style='color:blue;'>Ejemplo do-while:</span><br>";

    do{
        echo 'numero: ', $num, '<br>';
        $num++;
    }while($num<=20);


?>