<?php
    $dias = array('lunes','martes','miercoles','jueves','viernes','sabado','domingo');
    $pares = array_chunk($dias,2); # Crea un arreglo de arreglos de 2 elementos:
    print_r($pares);

    echo "<br>";
    
    for ($i=0; $i < count($pares); $i++){
        #print_r($pares[$i]);
        foreach ($pares[$i] as $value) {
            echo "<br>$value";
        }
    }

?>