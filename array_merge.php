<?php
    $dias = array('lunes','martes','miercoles','jueves','viernes','sabado','domingo');
    $merge = array_merge($dias,array('enero','febrero','marzo',)); # Junta dos arreglos en uno solo
    print_r($merge);
    echo "<br>";
    for ($i=0; $i < count($merge); $i++){
        echo "<br>",$merge[$i];
    }
?>