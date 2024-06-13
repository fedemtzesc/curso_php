<?php
    //arreglos, vectores, arrays
    $dias = array('LUN','MAR','MIE','JUE','VIE','SAB','DOM');

    var_dump($dias); #identifica el tipo de dato y su contenido
    echo '<br>';
    echo $dias[4];
    echo '<br>';
    print_r($dias);

    $mapa = array('Nombre' => 'Federico', 'Apellido Paterno'=> 'Martinez', 'Apellido Materno'=>'Escamilla');
    echo '<br>';
    echo 'Mi nombre es: ', $mapa['Nombre'],' ',$mapa['Apellido Paterno'],' ',$mapa['Apellido Materno'], '<br>';

    $cursos = array('python','java','php','html');
    print_r($cursos);
    $cursos[count($cursos)] = 'javascript'; # <= Asi se agrega un elemento nuevo al final
    $cursos[count($cursos)] = 'C#';
    asort($cursos);     #ordena alfabeticamente los valores en orden ascendente
    echo "<br>";
    print_r($cursos);   # Imprime un objeto en una forma legible para el humano
    rsort($cursos);     #ordena alfabeticamente los valores en orden ascendente
    echo "<br>";
    print_r($cursos);
    $x = count($cursos) - 1;
    
    for($i=0; $i<count($cursos);$i++){
        #$t = $x - $i;
        echo "<br>($i) => $cursos[$i]";
    }

    echo "<br><br>";
    asort($cursos); 
    foreach ($cursos as $value) {
        echo "$value<br>";
    }

    
?>