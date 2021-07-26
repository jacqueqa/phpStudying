<?php

$idade = 15;
$acompanhante = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou";
echo "a partir de 16 anos acompanhado" . PHP_EOL;
 
if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho" . PHP_EOL;
}
    else if ($idade >= 16 && $acompanhante > 1){
        echo "Você tem $idade anos, está acompanhado, pode entrar";
}   
        else {
                echo "Você só tem $idade anos, você não pode entrar sozinho";
            }

echo PHP_EOL;
echo "Até mais";
