<?php



$str = "O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar.";
echo "<br>";
// Faça um programa que conte quantos caracteres tem o texto.
echo mb_strlen($str)."<br>";

// substitua todas os espaços pelo caractere +
echo str_replace(" ","+",$str)."<br>";

// transforme a string em um vetor e imprima uma palavra em cada linha
$vetor =  explode(" ", $str);
for($i=0;$i<count($vetor);$i++){
    echo $vetor[$i]."<br>";
}