<?php
    $resultado = $_POST ["valor"];

        switch ($resultado) {           
            case 0:
                echo "VALOR IGUAL A ZERO";
                break;
            case $resultado > 0:
                echo "VALOR POSITIVO";
                break;
            case $resultado < 0:
                echo "VALOR NEGATIVO";
                break;
        }




    /* if ($resultado == 0) {
        echo "VALOR IGUAL A ZERO";
    }
    elseif ($resultado > 0) {
        echo "VALOR POSITIVO";
    }
    elseif ($resultado < 0) {
        echo "VALOR NEGATIVO";
    }
    else {
        echo "ERRO";
    } */
?>