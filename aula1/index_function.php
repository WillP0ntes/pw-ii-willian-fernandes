<?php

function Message() {
    echo "<h1> Sei la </h1>";
}


function verificarIdade($idade){
    if($idade<=17){
        echo"<h1> Menor de idade </h1>";
    }
    else{
        echo"<h1> Maior de idade </h1>";
    }
}


function validarCpf($cpf){
    if(strlen($cpf)!=11){
        return false;
    }
    else{
        return true;
    }
}



?>