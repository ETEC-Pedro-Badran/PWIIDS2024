<?php


$str = "O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar.";
echo "<br>";
echo mb_strlen($str)."<br>";
echo str_replace(" ","+",$str)."<br>";
$vetor =  explode(" ", $str);

for($i=0;$i<count($vetor);$i++){
    echo $vetor[$i]."<br>";
}

// Faça um programa que conte quantos caracteres tem o texto.
// substitua todas os espaços pelo caractere +
// transforme a string em um vetor e imprima uma palavra em cada linha


