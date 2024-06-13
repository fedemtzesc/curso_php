<?php
    $dias = array('lunes','martes','miercoles','jueves','viernes','sabado','domingo');
    $reb4 = array_slice($dias,0,2); # Extrae un sub-arreglo del arreglo
    print_r($reb4);
    echo "<br>";
    for ($i=0; $i < count($reb4); $i++){
        echo "<br>",$reb4[$i];
    }
    echo "<br>";
    print_r($dias);

?>