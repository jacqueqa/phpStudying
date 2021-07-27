<?php

$peso = 68;
$altura = 1.65;
$imc = $peso / $altura ** 2;

echo "O imc é $imc. Você está com o IMC ";

if ($imc < 18.5) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do ideal.";