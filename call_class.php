<?php
/*error_reporting(E_ALL);
ini_set('display_errors', '1');*/

    require_once("./classes/c_saiyajin.php");
    
    # Aqui estamos usando named parameters para que no importe el orden de
    # asignacion del argumento actual
    $goku = new Saiyajin(nombre:"Kakaroto", nivel:1000);
    echo "<br>";
    echo $goku->Saludar();
    echo "<br>";
    echo $goku->NivelDePelea();

    # Si no usaramos named-parameters tendriamos que hacer la instanciacion
    # de la clase respetando el orden de cada parametro como en el siguiente
    # ejemplo:
    $vegueta = new Saiyajin("Veguetta", 975);
    echo "<br>";
    echo $vegueta->Saludar();
    echo "<br>";
    echo $vegueta->NivelDePelea();

