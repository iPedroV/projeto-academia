<?php

$idade = 23;
$peso = 72;
$altura = 1.77;
$ativado = true;

if($ativado == true){
    $imc = ($peso/($altura^2));
    echo number_format( $imc,2);
}else{
    echo "Not this time!";

    
}

?>