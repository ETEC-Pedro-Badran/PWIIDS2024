<?php
$sigla = @$_GET['sigla']; 

if ($sigla=='SP') {
  echo "São Paulo";
} else if ($sigla=="RJ"){
    echo "Rio de Janeiro";
} else if ($sigla=="ES"){
    echo "Espirito Santo";
} else if ($sigla=="MG"){
    echo "Minas Gerais";
}

switch ($sigla){
    case "SP": 
         echo "São Paulo";
         break;
    case "RJ": 
        echo "Rio de Janeiro";
        break;
    case "MG": 
        echo "Minas Gerais";
        break;
    case "ES": 
        echo "Espirito Santo";
        break;
    default : 
        echo "Sigla inválida!";
}

?>
<br>
<h1>Selecione um Estado</h1>
<form>
    Digite a Sigla do Estado
    <select name="sigla">
        <option>SP</option>
        <option>MG</option>
        <option>ES</option>
        <option>RJ</option>
    </select>
    <input type='submit'>
</form>

<!-- Executar servidor
php -S localhost:80
-->