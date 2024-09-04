<?php
    $secao = $_POST["opcao"];
    $oponente = rand(1,3);
    $pedra = "<img src= 'pedra.png' width=80px height=80px>";
    $papel = "<img src= 'papel.png' width=80px height=80px>";
    $tesoura = "<img src= 'tesoura.png' width=80px height=80px>";

    switch(true){
        case ($secao == 1 && $oponente == 1):
            echo "<h2> $pedra x $pedra </h2>";
            echo "<h2>EMPATE</h2>";
        break;
        case ($secao == 1 && $oponente == 2):
            echo "<h2> $pedra x $papel</h2>";
            echo "<h2>VOCÊ PERDEU :( </h2>";
        break;
        case ($secao == 1 && $oponente == 3):
            echo "<h2>$pedra x $tesoura</h2>";
            echo "<h2>VOCÊ GANHOU!!!</h2>";
        break;

        case ($secao == 2 && $oponente == 1):
            echo "<h2>$papel x $pedra</h2>";
            echo "<h2>VOCÊ GANHOU!!!</h2>";
        break;
        case ($secao == 2 && $oponente == 2):
            echo "<h2>$papel x $papel</h2>";
            echo "<h2>EMPATE</h2>";
        break;
        case ($secao == 2 && $oponente == 3):
            echo "<h2>$papel x $tesoura</h2>";
            echo "<h2>VOCÊ PERDEU :( </h2>";
        break;

        case ($secao == 3 && $oponente == 1):
            echo "<h2>$tesoura x $pedra</h2>";
            echo "<h2>VOCÊ PERDEU :( </h2>";
        break;
        case ($secao == 3 && $oponente == 2):
            echo "<h2>$tesoura x $papel</h2>";
            echo "<h2>VOCÊ GANHOU!!!</h2>";
        break;
        case ($secao == 3 && $oponente == 3):
            echo "<h2>$tesoura x $tesoura</h2>";
            echo "<h2>EMPATE</h2>";
        break;
    }
?>