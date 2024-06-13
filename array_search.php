<?php
    $palabra_a_buscar = 'domingo';
    $dias = array('lunes','martes','miercoles','jueves','viernes','sabado','domingo');
    $indice = array_search($palabra_a_buscar, $dias); # Busca un valor dentro de un arreglo y regresa el indice en donde lo encuentra
    print_r($dias);
    echo "<br>La palabra o valor '$palabra_a_buscar' se encuentra en la posicion: [$indice]";
?>