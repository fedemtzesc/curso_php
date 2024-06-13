<?php
//switch case
/*
    switch ($variable) {
        case 'value':
            #codigo...
            break;
        default:
            #codigo...
            break;
    }
*/
$curso = 's#';
echo "Curso: $curso <br>";
switch($curso) {
    case 'php':
        echo 'lunes y miercoles';
        break;
    case 'java':
        echo 'martes y jueves';
        break;
    case 'C#':
        echo 'viernes y sabado';
        break;
    default:
        echo 'Curso Invalido!';
        break;
}

?>