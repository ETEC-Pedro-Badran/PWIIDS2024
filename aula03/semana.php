<?php
$dia = @$_GET['dia']; 

switch ($dia){
    case 1: 
         echo "Domingo";
         break;
    case 2: 
        echo "Segunda";
        break;
    case 3: 
        echo "Terça";
        break;
    case 4: 
        echo "Quarta";
        break;
    case 5: 
        echo "Quinta";
        break;
    case 5: 
        echo "Sexta";
        break;
    case 5: 
        echo "Sábado";
        break;
    default : 
        echo "Sigla inválida!";
}

?>
<br>
<h1>Selecione um Estado</h1>
<form>
    Digite um numero de 1 a 7 - 0 para domingo até 7 para o sábado
    <input type='number' name="dia">
    <input type='submit'>
</form>

<!-- Executar servidor
php -S localhost:80
-->