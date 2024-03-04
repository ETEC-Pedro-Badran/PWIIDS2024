<?php
// $_GET acessa os parâmetros da requisição
$nome = @$_GET['nome']; 
$idade = @$_GET['idade'];
echo "$nome - $idade anos";
?>
<br>
<!-- Os inputs dentro do form enviam os valores
digitados pelo usuário. O atributo name indica
o nome do parâmetro.
-->
<form>
    Nome <input type='text' name='nome'>
    Idade <input type='text' name='idade'>
    <input type='submit'>
</form>

