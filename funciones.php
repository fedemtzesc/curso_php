<?php
    //funciones
    global $edad;
    $edad = 35;

    function estudiante($nombre = 'Federica'){
        echo "<br>Hola <span style='color:green;'>$nombre</span>";
    }

    estudiante(); #<== Toma el parametro por default de la funcion
    estudiante('Lucha');
    estudiante('Ximena');

    function suma($a, $b){
        return $a + $b;
    }

    function obtenerEdad(){
        global $edad;
        $edad = 50;
        return $edad;
    }
    echo "<br>";
    echo "edad: ";
    echo obtenerEdad();
    echo "<br>";
    echo $edad;
    echo "<br>";
    
    

    echo "<br>";
    echo suma(16,4);

    ?>