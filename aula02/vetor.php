<?php
    //declaração de um vetor
    $v = Array();

    $v[0] = 8;
    $v[1] = 81;
    $v[2] = 6;
    $v[3] = 7;
    $v[4] = 5;

    echo "Tamanho do vetor: " . count($v);

    for($i=0;$i<count($v);$i++){
        echo "<p> $v[$i] </p>";
    }
?>