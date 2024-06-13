<?php
    //condicionales
    $num_uno=11;
    $num_dos=11;

    echo "valores: $num_uno, $num_dos";


    print '<br>';
    if ($num_uno != $num_dos) {
        print '<br>';
        if ($num_uno < $num_dos) {
            echo $num_uno, " es menor a ", $num_dos;
        } else {
            echo $num_uno, " es mayor a ", $num_dos;
        }
    }else{
        echo $num_uno, " es igual a ", $num_dos;
    }
    

    
    
?>