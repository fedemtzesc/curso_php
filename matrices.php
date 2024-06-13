<?php
    //MATRICES, Arrays Multidimensionales

    $matriz = array(
        array(1,2,3,4,5),
        array(6,7,8,9,10),
        array(11,12,13,14,15)
    );

    #print(count($matriz));
    #print(count($matriz[1]));

    for ($i=0; $i < count($matriz) ; $i++) { 
        for ($j=0; $j < count($matriz[$i]); $j++) { 
            echo "<br>";
            $k = $i+1; 
            $l = $j+1;
            echo "valor[$k][$l]: ", $matriz[$i][$j];
        }
    }


?>
