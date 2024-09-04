<?php
    $valorA = $_POST ["a"];
    $valorB = $_POST ["b"];

    if ($valorA > $valorB) {
        echo "<h1>A é maior que B</h1>";
    }
    else{
        echo "<h1>B é maior que A</h1>";
    }
?>