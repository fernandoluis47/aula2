<?php

/*
Comandos condicionais = Condição
if - else
se - senão
sintaxe:
if (condition) {
    [statements true]
} else {
    [staments false]
}
*/

$idade = 8;
if ($idade>=18){
    echo "maior de idade";
} else {
    echo "menor de idade";
}



echo "<br>";
    $funcionario = "Paulo";
    $salario = 9000;

    if($salario<9000){
        echo "inss -- 9%";
    }else{
        echo "inss -- 11";
    }