<?php 

    $nota1 = 7;
    $nota2 = 10;
    $nota3 = 5;
    $nota4 = 4;

    $notaSemestral = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    if ($notaSemestral >= 6){
        echo "<h2 class='nota'> Nota: $notaSemestral <h3 class='nota' style='color:'>APROVADO";
    }

    else{
        echo "<h2 class='nota'> Nota $notaSemestral <h3 class='nota' style='color:'>REPROVADO";
    }

    ?>

    <br>

    <?php

    $mes = 3;

    switch ($mes) {
        
        case 1:
            echo "Janeiro";
            break;

            case 2:
                echo "fevereiro";
                break;

                case 3:
                    echo "<h2 class='mes'> Março";
                    break;

        default:
        echo "mês invalido";
    }

    ?>

    <?php

    // Laços de repetição

    $i = 7;

    //for ($i; $i <=10; $i++){

   // }

    while ($i >=10){
        echo "<h1> Teste While";
    }

    ?>

</div>

<div class="pares">

<?php

$num = 0;

for ($num; $num <=100; $num++) {

    if ($num % 2 == 0) {

        echo "<h2 class='numpar' style='background-color: blue'> $num";
    }

    else {
        echo "<h2 class='numpar' style='background-color: purple'> $num";
    }
    

}



?>



</div>

<div class="tabuada">

    <?php

    $tab = 1;
    $num = 5;

    for ($tab; $tab<=10; $tab++){

        $resultado = $num * $tab;
        
        echo "5 x $tab = $resultado <br />";
    }

    ?>