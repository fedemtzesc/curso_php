<?php
    //Sirve para imprimir strings en pantalla
    print 'hola mundo';
    //Para que se vea el saltos de linea usamos br de HTML
    print '<br>';
    
    //Esta instruccion tambien sirve para lo mismo
    //echo funciona como el print de python
    echo 'hola', '_echo!', ' otra cadena';
    echo '<br>';
    
    //Variable de tipo string
    $nombre = 'Federico';
    echo $nombre, '! Como estas?';

    //Variable tipo numero 
    echo '<br>';
    $edad = 50.5;
    echo 'Tu edad es ', $edad, ' años';

    //Este ejemplo muestra la diferencia entre el uso de comillas
    //simples y comillas dobles:
    echo '<br>';
    echo 'Federico tu edad es de $edad años...(con comillas simples)';
    echo '<br>';
    echo "Federico tu edad es de $edad años...(con comillas dobles)";

    //Si queremos el mismo resultado que con comillas dobles tnemos 
    //que concatenar con puntos
    echo '<br>';
    echo 'Federico tu edad es de '.$edad.' años...(con comillas simples y puntos concatenadores)';

    //Constantes
    define('NOMBRE_CONSTANTE','VALOR');
    echo '<br>';
    echo NOMBRE_CONSTANTE;

?>