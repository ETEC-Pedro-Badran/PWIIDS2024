<?php
   $estacao = ['Verão', 'Outono','Inverno', 'Primavera'];
   $meses = [["Dezembro",'Janeiro','Fevereiro','Março'],['Março','Abril','Maio','Junho'],
   ['Junho','Julho','Agosto','Setembro'],['Setembro','Outubro','Novembro',"Dezembro"]];
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
         for($i=0;$i<count($estacao);$i++) {
            
            echo "<br>A estação $estacao[$i] ocorre nos meses: ";
            
            for($a=0;$a < count($meses[$i]);$a++ ) {
                echo " ".$meses[$i][$a];
            }
            echo "<br>";
         }
     ?>   

</body>
</html>