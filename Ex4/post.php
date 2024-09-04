<?php
    $l1 = $_POST["l1"];
    $l2 = $_POST["l2"];
    $l3 = $_POST["l3"];
    
    $converte = $l1 - $l2;
    if($converte < 0) {
        $converte = $converte * -1;
    }

    if($l3 > $converte) {

        switch ($l1) {
            case ($l1 == $l2 and $l2 == $l3):
                echo "Triangulo equilatero!";
                break;
            case ($l1 == $l2 or $l2 == $l3 or $l3 == $l1):
                echo "Triangulo isósceles!";
                break;
            default:
                echo "Triangulo escaleno!";
                break;
        }
            

    }  
    
    else {
        echo "Esses números não formam triângulo!";
    }
    
?>