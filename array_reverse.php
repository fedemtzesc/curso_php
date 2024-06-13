<?php
    
    $dias = array('lunes','martes','miercoles','jueves','viernes','sabado','domingo');

    
    $reversa = array_reverse($dias); # Reversa el orden del arrewglo y gener aotro 
    echo "Arreglo original:<br>&nbsp;&nbsp;<b>";
    print_r($dias);
    echo "</b><br>Despues de aplicarle array_reverse:<br>&nbsp;&nbsp;<b>";
    print_r($reversa);

?>