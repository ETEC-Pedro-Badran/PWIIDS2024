<?php
   $semana = ['Domingo', 'Segunda','Terça', 'Quarta', 'Quinta','Sexta', 'Sábado'];

   //posição inicial do vetor (array) é sempre 0
   $aulas = [[],["PWII","PWII"],["APS","BDII"],["PAMI","PTCC"],["PAMI","SE"],["DS","DS"],[]];
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>For com vetor</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
     <?php
         //count obtem o comprimento do vetor
         for($i=0;$i<count($semana);$i++) {
            echo $semana[$i];
            echo '<br>';
            
            for($a=0;$a < count($aulas[$i]);$a++ ) {
                echo " ". ($a+1)." aula:". $aulas[$i][$a];
                
            }
            echo "<br>";
         }
     ?>   

</body>
</html>