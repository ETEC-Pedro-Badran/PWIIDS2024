<html>
<head>
</head>    
<body style="text-align:center">


<?php
echo "<h1>Estruturas de Repetição</h1>";
echo "<h2 style='text: weight 600px;background-color:grey;color:white'>While</h2>";
echo "<br>";
echo "while (condicao_logica) { } ";
echo "Execute enquanto a condição lógica for <strong>true</strong><br>";

$a = 0;
while($a<=10){
    echo $a++;
    echo " ";
}
echo "<BR>";

$tenho = 10.0; //quantidade em reais
$idade = 15; // idade
// Para entrar na festa precisa ter 18 anos e R$ 12,00
while  ($tenho<12 || $idade<18){  // o inverso também é verdadeiro (!($tenho>=12 && $idade>=18)){
   $tenho++;
   $idade++;
   echo "Agora tenho R$$tenho e $idade de idade <br>";
}
echo "Agora posso entrar na festa, pois tenho R$$tenho e $idade anos de idade ";



?>



</html>

