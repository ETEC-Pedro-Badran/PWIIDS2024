<?php
$peso = @$_GET['peso']; 
$altura = @$_GET['altura'];
if ($altura>0) {
    $imc = $peso / ($altura * $altura);
    echo "Seu IMC é de: $imc";
}
?>
<br>
<h1>Cálculo de Índice de Massa Corporal</h1>
<form>
    Peso <input type='text' name='peso'>
    Altura <input type='text' name='altura'>
    <input type='submit'>
</form>

<!-- Executar servidor
php -S localhost:80
-->